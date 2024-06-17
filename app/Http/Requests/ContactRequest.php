<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'min:10'],
            'message' => ['string', 'nullable'],
            'exam' => ['string', 'nullable'],
            'glasses' => ['string', 'nullable'],
            'lenses' => ['string', 'nullable'],
            'buy' => ['string', 'nullable'],
            'address' => ['string', 'nullable'],
            'prescription' => ['string', 'nullable'],
            'prescription-file' => ['max:2048', 'mimes:jpeg,jpg,png,pdf', 'nullable'],
            'lens-model' => ['string', 'nullable'],
            'left-sphere' => ['nullable'],
            'left-cylinder' => ['nullable'],
            'left-axis' => ['nullable'],
            'left-add' => ['nullable'],
            'left-radius' => ['nullable'],
            'right-sphere' => ['nullable'],
            'right-cylinder' => ['nullable'],
            'right-axis' => ['nullable'],
            'right-add' => ['nullable'],
            'right-radius' => ['nullable'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Ce champ est requis',
        ];
    }
}
