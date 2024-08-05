<?php

namespace App\Actions\API;

use App\DTO\CreateNotificationRequestData;
use App\Jobs\NotificationsAddBDJob;
use Illuminate\Foundation\Bus\PendingDispatch;

class CreateNotificationRabbitAction
{
    public function execute(CreateNotificationRequestData $dto): array
    {
        NotificationsAddBDJob::dispatch($dto);

        return ['success' => true, 'message' => 'Уведомление сохранено'];
    }
}
