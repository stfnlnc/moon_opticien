<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionRequest extends FormRequest
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
            'site_url' => ['required', 'string', 'max:255'],
            'site_name' => ['required', 'string', 'max:255'],
            'site_description' => ['required', 'string', 'max:255'],
            'site_keywords' => ['string', 'max:255'],
            'site_favicon' => ['nullable', 'image', 'max:1024'],
            'site_logo' => ['nullable', 'image', 'max:1024'],
            'site_copyright' => ['nullable', 'string', 'max:255']
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Ce champ est requis.',
            'max' => 'Ce champ ne doit pas dépasser 255 caractères.',
            'image' => 'Le format d\'image n\'est pas compatible'
        ];
    }
}
