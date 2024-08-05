<?php

namespace App\Actions\API;

use App\Repositories\NotificationsRepository;
use Illuminate\Database\Eloquent\Collection;

class GetNotificationAction
{
    public function __construct(private readonly NotificationsRepository $notificationsRepository){}

    public function execute(): Collection
    {
        return $this->notificationsRepository->getNotifications();
    }
}
