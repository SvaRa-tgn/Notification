<?php

namespace App\Jobs;

use App\DTO\CreateNotificationRequestData;
use App\Models\Notification;
use App\Repositories\NotificationsRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NotificationsAddBDJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $notification;
    /**
     * Create a new job instance.
     */
    public function __construct($notification)
    {
        $this->notification = $notification;
    }

    /**
     * Execute the job.
     */
    public function handle(NotificationsRepository $notificationsRepository): Notification
    {
        return $notificationsRepository->createNotification($this->notification);
    }
}
