<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $notifications = auth()->user()->unreadNotifications;
        // return view('admin.notification.notifi', compact('notifications'));
    }

    // public function markNotification(Request $request)
    // {
    //     auth()->user()
    //         ->unreadNotifications
    //         ->when($request->input('id'), function ($query) use ($request) {
    //             return $query->where('id', $request->input('id'));
    //         })
    //         ->markAsRead();

    //     return response()->noContent();
    // }
}
