<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameStoreRequest extends FormRequest
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
            "title" => "required|min:2",
            "price" => "required|integer",
            "description" => "required",
            "img" => "image"
        ];
    }

    public function messages(){
        return [
            "title.required" => "Campo obbligatorio",
            "title.min" => "Il titolo deve contenere almeno 2 caratteri",
            "price.required" => "Campo obbligatorio",
            "price.integer" => "Deve essere un numero",
            "description.required" => "Campo obbligatorio",
            "img" => "Il file deve essere un'immagine"
        ];
    }
}
