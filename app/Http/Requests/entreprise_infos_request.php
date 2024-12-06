<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class entreprise_infos_request extends FormRequest
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
            "nom" => "required",
            "domaine" => "required",
            "description" => "required",
            "vision" => "required",
            "image" => "required",
        ];
    }
    public function messages(): array
    {
        return [
            "nom.required" => "Le nom de l'entreprise est requis.",
            "domaine.required" => "Le domaine d'activité est requis.",
            "description.required" => "La description est requise.",
            "vision.required" => "La vision est requise.",
            "image.required" => "L'image est requise.",
        ];
    }
}
