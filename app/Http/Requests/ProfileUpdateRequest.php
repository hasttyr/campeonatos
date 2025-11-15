<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()?->id ?? null),
            ],
            'phone' => [
                'nullable',
                'string',
                'max:30',
                'regex:/^[0-9+\-\s()]*$/',
            ],
            'profile.bio' => [
                'nullable',
                'string',
                'max:1000',
            ],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // Normalize is_active from checkbox values (on/off, "1", "true") to boolean
        if ($this->has('is_active')) {
            $this->merge([
                'is_active' => filter_var($this->input('is_active'), FILTER_VALIDATE_BOOLEAN),
            ]);
        }

        // Trim common string inputs
        $this->merge([
            'name' => $this->input('name') ? trim($this->input('name')) : $this->input('name'),
            'email' => $this->input('email') ? trim($this->input('email')) : $this->input('email'),
            'phone' => $this->input('phone') ? trim($this->input('phone')) : $this->input('phone'),
        ]);

        // Ensure profile is an array when coming from inputs like profile[bio]
        if ($this->has('profile') && !is_array($this->input('profile'))) {
            $this->merge(['profile' => ['bio' => (string) $this->input('profile')]]);
        }
    }

    /**
     * Custom error messages for validation.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser texto.',
            'name.max' => 'El nombre no puede superar :max caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'email.max' => 'El correo electrónico no puede superar :max caracteres.',
            'email.unique' => 'Este correo ya está registrado.',

            'phone.string' => 'El teléfono debe ser texto.',
            'phone.max' => 'El teléfono no puede superar :max caracteres.',
            'phone.regex' => 'El teléfono contiene caracteres inválidos.',

            'profile.bio.string' => 'La biografía debe ser texto.',
            'profile.bio.max' => 'La biografía no puede superar :max caracteres.',

            'is_active.boolean' => 'El valor de activo debe ser verdadero o falso.',
        ];
    }

    /**
     * Human readable attribute names.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'profile.bio' => 'biografía',
            'is_active' => 'activo',
            'phone' => 'teléfono',
        ];
    }
}
