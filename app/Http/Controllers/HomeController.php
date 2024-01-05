<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // retorna vista home con todas las experiencias del modelo experiencia
        return view('home', [
            'experiences' => Experience::all()
        ]);
    }

    public function store(Request $request)
    {
        // validación de campos
        $request->validate([
            'position' => 'required',
            'place' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        // crea una nueva experiencia con los datos del request
        $experience = new Experience();
        $experience->position = $request->position;
        $experience->place = $request->place;
        $experience->description = $request->description;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;

        // guarda la experiencia
        $experience->save();

        // redirecciona a la vista home
        return redirect()->route('home');
    }

    //   funcion update que recibe el id 
    public function update(Request $request, $id)
    {
        // validación de campos
        $request->validate([
            'position' => 'required',
            'place' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        // busca la experiencia con el id
        $experience = Experience::find($id);

        // actualiza la experiencia con los datos del request
        $experience->position = $request->position;
        $experience->place = $request->place;
        $experience->description = $request->description;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;

        // guarda la experiencia
        $experience->save();

        // redirecciona a la vista home
        return redirect()->route('home');
    }


    //funcion destroy que recibe el id
    public function destroy($id)
    {
        // busca la experiencia con el id
        $experience = Experience::find($id);

        // elimina la experiencia
        $experience->delete();

        // redirecciona a la vista home
        return redirect()->route('home');
    }

    


}

//  <div class="mb-5">
//                                                 <label for="position" class="sr-only">Puesto</label>
//                                                 <input id="position" type="text" placeholder="Puesto" name="position" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
//                                                 @error('position')
//                                                 <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
//                                                     {{ $message }}
//                                                 </div>
//                                                 @enderror
//                                             </div>
                
//                                             <div class="mb-5">
//                                                 <label for="place" class="sr-only">Lugar</label>
//                                                 <input id="place" type="text" placeholder="Lugar" name="place" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
//                                                 @error('place')
//                                                 <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
//                                                     {{ $message }}
//                                                 </div>
//                                                 @enderror
//                                             </div>
                
//                                             <div class="mb-5">
//                                                 <label for="description" class="sr-only">Descripción</label>
//                                                 <textarea id="description" type="text" placeholder="Descripción" name="description" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100"></textarea>
//                                                 @error('description')
//                                                 <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
//                                                     {{ $message }}
//                                                 </div>
//                                                 @enderror
//                                             </div>
                
//                                             <div class="mb-5">
//                                                 <label for="start_date" class="sr-only">Fecha de inicio</label>
//                                                 <input id="start_date" type="date" placeholder="Fecha de inicio" name="start_date" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
//                                                 @error('start_date')
//                                                 <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
//                                                     {{ $message }}
//                                                 </div>
//                                                 @enderror
//                                             </div>
                
//                                             <div class="mb-5">
//                                                 <label for="end_date" class="sr-only">Fecha de fin</label>
//                                                 <input id="end_date" type="date" placeholder="Fecha de fin" name="end_date" required="" class="w-full px-4 py-3 border placeholder:text-slate-400 rounded-md outline-none focus:ring-4 border-slate-300 focus:border-slate-600 ring-slate-100">
//                                                 @error('end_date')
//                                                 <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
//                                                     {{ $message }}
//                                                 </div>
//                                                 @enderror
//                                             </div>