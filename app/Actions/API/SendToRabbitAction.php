<?php

namespace App\Actions\API;

use App\Http\Requests\CreateNotificationRequest;
use App\Models\Notification;
use App\Repositories\NotificationsRepository;
use App\Services\RabbitService;
use Illuminate\Http\JsonResponse;

class SendToRabbitAction
{
    public function __construct(private readonly RabbitService $rabbitService){}

    /**
     * @throws \Exception
     */
    public function execute(CreateNotificationRequest $request): JsonResponse
    {
        $message = json_encode($request->dto());

        $this->rabbitService->rabbitConnect($message);

        return response()->json(['success' => true, 'message' => 'Уведомление отправлено']);
    }
}
