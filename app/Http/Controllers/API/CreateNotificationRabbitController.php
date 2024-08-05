<?php

namespace App\Http\Controllers\API;

use App\Actions\API\CreateNotificationRabbitAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNotificationRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateNotificationRabbitController extends Controller
{
    public function createNotificationRabbit(CreateNotificationRabbitAction $action, CreateNotificationRequest $request): JsonResponse
    {
        return response()->json($action->execute($request->dto()))->setStatusCode(Response::HTTP_CREATED);
    }
}
