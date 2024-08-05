<?php

namespace App\DTO;

use App\Http\Requests\CreateNotificationRequest;
use Spatie\LaravelData\Data;

class CreateNotificationRequestData extends Data
{
    public function __construct(public string $sender,
                                public string $recipient,
                                public string $text){}

    public static function fromRequest(CreateNotificationRequest $request): self
    {
        return new self($request->input()['sender'],
                        $request->input()['recipient'],
                        $request->input()['text'],);
    }

}
