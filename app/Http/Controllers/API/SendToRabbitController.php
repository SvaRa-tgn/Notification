<?php

namespace App\Http\Controllers\API;

use App\Actions\API\SendToRabbitAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNotificationRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SendToRabbitController extends Controller
{
    /**
     * @throws \Exception
     */
    public function sendToRabbit(SendToRabbitAction $action, CreateNotificationRequest $request): JsonResponse
    {
        return response()->json($action->execute($request))->setStatusCode(Response::HTTP_CREATED);
    }
}
