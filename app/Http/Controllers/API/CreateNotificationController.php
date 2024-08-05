<?php

namespace App\Http\Controllers\API;

use App\Actions\API\CreateNotificationAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNotificationRequest;
use App\Http\Resources\NotificationResource;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateNotificationController extends Controller
{
    public function createNotification(CreateNotificationAction $action, CreateNotificationRequest $request): JsonResponse
    {
        return (new NotificationResource($action->execute($request)))->response()->setStatusCode(Response::HTTP_CREATED);
    }
}
