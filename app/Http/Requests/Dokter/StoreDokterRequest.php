<?php

namespace App\Http\Requests\Dokter;

use Illuminate\Foundation\Http\FormRequest;

class StoreDokterRequest extends FormRequest
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
            'kode_dokter' => [
                'required', 'unique:dokter',
            ],
            'nama' => [
                'required',
            ],
        ];
    }
}
