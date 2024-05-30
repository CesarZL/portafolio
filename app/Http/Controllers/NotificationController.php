<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class NotificationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // Obtener las notificaciones no leídas
        $unread_notifications = auth()->user()->unreadNotifications;

        // Obtener las notificaciones leídas con valores en la columna read_at
        $read_notifications = Auth::user()->readNotifications()->latest()->paginate(3);

                
        // Marcar como leídas
        auth()->user()->unreadNotifications->markAsRead();

        return view('notifications.index', [
            'unread_notifications' => $unread_notifications,
            'read_notifications' => $read_notifications
        ]);
    }
}
