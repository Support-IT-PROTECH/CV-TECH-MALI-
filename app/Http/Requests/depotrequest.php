<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class depotrequest extends FormRequest
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
            'nom' => 'required',
            'email' => 'required',
            'specialite' => 'required',
            'file' => 'required|file|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis',
            'email.required' => "L'email est requis",
            'specialite.required' => 'La specialite est requise',
            'file.required' => 'Le fichier est requis',
            'file.file' => 'Le fichier doit être un fichier valide',
            'file.max' => 'Le fichier ne doit pas dépasser 2MB',
        ];
    }
}
