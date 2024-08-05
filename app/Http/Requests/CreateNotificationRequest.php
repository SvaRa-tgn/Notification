<?php

namespace App\Http\Requests;

use App\DTO\CreateNotificationRequestData;
use Illuminate\Foundation\Http\FormRequest;

class CreateNotificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sender'    => ['required', 'string'],
            'recipient' => ['required', 'string'],
            'text'      => ['required', 'string'],
        ];
    }

    public function dto(): CreateNotificationRequestData
    {
        return CreateNotificationRequestData::fromRequest($this);
    }
}
