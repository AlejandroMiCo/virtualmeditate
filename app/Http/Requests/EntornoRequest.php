<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntornoRequest extends FormRequest
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
			'categoria_id' => 'required|exists:categorias,id',
			'nombre' => 'required|string',
			'musica' => 'required|string',
        ];
    }
}
