<?php

namespace App\Repositories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Collection;

class NotificationsRepository
{
    public function createNotification($message): Notification
    {
        $notification = new Notification();

        $notification->sender = $message->sender;
        $notification->recipient = $message->recipient;
        $notification->text = $message->text;

        $notification->save();

        return $notification;
    }
    public function getNotifications(): Collection
    {
        return Notification::all();
    }
}
