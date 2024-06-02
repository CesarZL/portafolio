<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();        
        return view('projects.index',
            compact('projects')
        );
    }

    public function show(string $id)
    {
        $project = Project::find($id);
        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('projects.create',
            compact('categories')
        );
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'abstract' => 'required|string|max:255',
            'abstract_en' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta el tamaño máximo según tus necesidades
            'content' => 'required|string',
            'content_en' => 'required|string',
            'principal_category' => 'required', // Asegúrate de que la categoría exista en la base de datos
            'categories' => 'array|min:1|max:3', // Asegúrate de que al menos dos categorías secundarias se hayan seleccionado
        ]);

        // Obtener la imagen del request
        $image = $request->file('image');
        
        // Crear un nombre único para la imagen
        $imageName = Str::uuid().'.'.$image->extension();
        
        // Crear una instancia de la imagen usando Intervention Image
        $ServerImage = Image::make($image);
        
        // Redimensionar la imagen
        $ServerImage->fit(1200, 600);
        
        // Guardar la imagen modificada en el directorio storage/projects/
        $imagePath = 'projects/' . $imageName;
        $ServerImage->save(storage_path('app/public/' . $imagePath));
        
        // Filtrar categorías secundarias para que no incluyan la principal
        $categories = array_filter($request->input('categories'), function($categoryId) use ($request) {
            return $categoryId != $request->input('principal_category');
        });

        // Validar que al menos una categoría secundaria se haya seleccionado
        if (count($categories) < 3) {
            return back()->withErrors(['categories' => 'Debes seleccionar al menos dos categorías secundarias.'])->withInput();
        }

        // Crear el proyecto
        $project = new Project([
            'title' => $request->input('title'),
            'title_en' => $request->input('title_en'),
            'abstract' => $request->input('abstract'),
            'abstract_en' => $request->input('abstract_en'),
            'image' => $imagePath,
            'content' => $request->input('content'),
            'content_en' => $request->input('content_en'),
            'category_id' => $request->input('principal_category'),
        ]);

        // Guardar el proyecto
        $project->save();

        // Asociar las categorías secundarias
        $project->categories()->attach($categories);

        // Redirigir o retornar una respuesta JSON según sea necesario
        return redirect()->route('projects.index')->with('success', 'Proyecto creado exitosamente.');
    }

    public function edit($id)
    {
        $project = Project::find($id);
        $categories = Category::all(); // Asumiendo que tienes un modelo Category   
        return view('projects.edit', compact('project', 'categories'));
    }

    public function update(Request $request, $id)
{
    // Validación de los datos del formulario
    $request->validate([
        'title' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'abstract' => 'required|string|max:255',
        'abstract_en' => 'required|string|max:255',
        'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta el tamaño máximo según tus necesidades
        'content' => 'required|string',
        'content_en' => 'required|string',
        'principal_category' => 'required', // Asegúrate de que la categoría exista en la base de datos
        'categories' => 'array|min:1|max:3', // Asegúrate de que al menos dos categorías secundarias se hayan seleccionado
    ]);

    $project = Project::findOrFail($id);

    // Si se proporciona una nueva imagen, procesarla
    if ($request->hasFile('image')) {
        // Obtener la imagen del request
        $image = $request->file('image');
        
        // Crear un nombre único para la imagen
        $imageName = Str::uuid().'.'.$image->extension();
        
        // Crear una instancia de la imagen usando Intervention Image
        $ServerImage = Image::make($image);
        
        // Redimensionar la imagen
        $ServerImage->fit(1200, 600);
        
        // Guardar la imagen modificada en el directorio storage/projects/
        $imagePath = 'projects/' . $imageName;
        $ServerImage->save(storage_path('app/public/' . $imagePath));

        // Eliminar la imagen antigua si existe
        if ($project->image) {
            Storage::delete('public/' . $project->image);
        }

        $project->image = $imagePath;
    }   

    // Filtrar categorías secundarias para que no incluyan la principal
    $categories = array_filter($request->input('categories'), function($categoryId) use ($request) {
        return $categoryId != $request->input('principal_category');
    });

    // Validar que al menos una categoría secundaria se haya seleccionado
    if (count($categories) < 1) {
        return back()->withErrors(['categories' => 'Debes seleccionar al menos una categoría secundaria.'])->withInput();
    }

    // Actualizar los datos del proyecto
    $project->update([
        'title' => $request->input('title'),
        'title_en' => $request->input('title_en'),
        'abstract' => $request->input('abstract'),
        'abstract_en' => $request->input('abstract_en'),
        'content' => $request->input('content'),
        'content_en' => $request->input('content_en'),
        'category_id' => $request->input('principal_category'),
    ]);

    // Actualizar las categorías secundarias
    $project->categories()->sync($categories);

    // Redirigir o retornar una respuesta JSON según sea necesario
    return redirect()->route('projects.index')->with('success', 'Proyecto actualizado exitosamente.');
}

public function destroy($id)
{
    $project = Project::find($id);

    // Eliminar la imagen si existe
    if ($project->image) {
        Storage::delete('public/' . $project->image);
    }

    // Eliminar el proyecto
    $project->delete();

    return redirect()->route('projects.index');
}

}
