<?php

namespace App\Actions\API;

use App\Http\Requests\CreateNotificationRequest;
use App\Models\Notification;
use App\Repositories\NotificationsRepository;
use Illuminate\Http\JsonResponse;

class CreateNotificationAction
{
    public function __construct(private readonly NotificationsRepository $notificationsRepository){}

    public function execute(CreateNotificationRequest $request): Notification
    {
        return $this->notificationsRepository->createNotification($request);
    }
}
