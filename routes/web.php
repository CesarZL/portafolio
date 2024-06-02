<?php

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Notifications\MensajesPortafolio;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    $projects = Project::inRandomOrder()->take(3)->get();
    return view('home', compact('projects'));
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/download',  function(){
    $file = public_path()."/docs/cv.pdf";
    $headers = array(
        'Content-Type: application/pdf',
    );
    return response()->download($file, 'cv-cesarzavala.pdf', $headers);
})->name('download');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');

Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');



Route::post('/contact', function(Request $request){
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message'=>'required'
    ]);

    // Obtener el usuario administrador
    $admin = User::where('rol', 1)->first();

    // Enviar la notificación al administrador
    Notification::send($admin, new MensajesPortafolio($request->name, $request->email, $request->message));

    return redirect()->route('contact')->with('status', 'message-sent');

})->name('contact.send');  



Route::middleware('rol.admin')->group(function () {

    Route::get('/project/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('project/create' , [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/project/{id}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::put('/project/{id}/edit', [ProjectsController::class, 'update'])->name('projects.update');
    Route::delete('/project/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/notifications', NotificationController::class)->name('notifications');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

require __DIR__.'/auth.php';
