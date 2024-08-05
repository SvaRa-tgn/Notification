<?php

namespace App\Http\Controllers\API;

use App\Actions\API\GetNotificationAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationCollection;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetNotificationController extends Controller
{
    public function getNotification(GetNotificationAction $action): JsonResponse
    {
        return (new NotificationCollection($action->execute()))->response()->setStatusCode(Response::HTTP_CREATED);
    }
}
