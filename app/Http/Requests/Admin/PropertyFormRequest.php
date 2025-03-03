<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
            "title" => ["required", "string", "max:255"],
            "description" => ["required", "string"],
            "surface" => ["required", "integer", "min:1"],
            "rooms" => ["required", "integer", "min:1"],
            "bedrooms" => ["required", "integer", "min:1"],
            "floor" => ["required", "integer", "min:0"],
            "price" => ["required", "integer", "min:0"],
            "city" => ["required", "string", "min:1"],
            "address" => ["required", "string", "min:2"],
            "postal_code" => ["required"],
            "sold" => ["required", "boolean"],
            "options" => ["exists:options,id", "array"],
        ];
    }
}
