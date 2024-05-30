<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Notifications\MensajesPortafolio;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\NotificationController;



Route::get('/', function () {
    return view('home');
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

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

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
   

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/notifications', NotificationController::class)->name('notifications');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

require __DIR__.'/auth.php';
