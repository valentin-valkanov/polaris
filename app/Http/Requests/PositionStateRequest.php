<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionStateRequest extends FormRequest
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
            'time' => ['required', 'date'],
            'symbol' => ['required', 'string'],
            'type' => ['required', 'string'],
            'volume' => ['required', 'numeric'],
            'priceLevel' => ['required', 'numeric'],
            'stopLoss' => ['required', 'numeric'],
            'commission' => ['required', 'numeric'],
            'dividend' => ['nullable', 'numeric'],
            'swap' => ['nullable', 'numeric'],
            'profit' => ['required', 'numeric'],
            'system' => ['required', 'string'],
            'strategy' => ['required', 'string'],
            'assetClass' => ['required', 'string'],
            'grade' => ['required', 'in:none,A,B,C'],
            'state' => ['required', 'in:opened,scale_out,scale_in,closed'],
        ];
    }
}
