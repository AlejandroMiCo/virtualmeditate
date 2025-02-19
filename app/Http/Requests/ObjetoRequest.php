<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObjetoRequest extends FormRequest
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
			'nombre' => 'required|string',
			'entorno_id' => 'required|exists:entornos,id',
			'dimensiones' => 'required|numeric|min:1',
			'posicion' => 'required|numeric|min:1',
			'color' => 'required|string',
        ];
    }
}
