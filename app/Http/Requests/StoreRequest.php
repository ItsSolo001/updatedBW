<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    // /**
    //  * Determine if the user is authorized to make this request.
    //  */
    public function authorize(): bool
    {
        return true; // Change this if you need to implement authorization logic
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string', 'url'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:available,sold'], // Only allow specific status values
        ];
    }
}
