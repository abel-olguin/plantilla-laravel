<?php

namespace App\Http\Controllers;

use App\Models\Event;

class NotificationController extends Controller
{
    public function show($notification)
    {
        $notification = auth()->user()->notifications->where('id', $notification)->first();
        $notification->markAsRead();
        $route = ('events.show');
        // ... if there are more notification types
        $event = Event::where('id', $notification->data['event_id'])->select('slug')->first();

        return redirect(null, 301)->route($route, $event->slug);
    }
}
