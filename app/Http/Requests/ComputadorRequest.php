<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputadorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        switch($this->getMethod()){
            case "POST":
                return [
                    'marca' => 'required',
                    'preco' => 'required|numeric|between:0,100000',
                    'ram'   => 'required|integer|between:1,1000',
                    'disco' => 'required|integer|between:1,1000000',
                ];
            case "PUT":
                return [
                    'marca' => "required",
                    'preco' => 'required|numeric|between:0,100000',
                    'ram'   => 'required|integer|between:1,1000',
                    'disco' => 'required|integer|between:1,1000000',
                ];
        }
    }

    public function messages(): array
    {
        return [
            'marca.required'    => ':attribute é obrigatório',
            'marca.unique'      => ":attribute já existe no sistema",
            'preco.required'    => ':attribute é obrigatório',
            'preco.numeric'     => ':attribute inválido',
            'preco.between'     => ':attribute está fora dos limites',
            'ram.required'      => ':attribute é obrigatório',
            'ram.integer'       => ':attribute inválido',
            'ram.between'       => ':attribute está fora dos limites',
            'disco.required'    => ':attribute é obrigatório',
            'disco.integer'     => ':attribute inválido',
            'disco.between'     => ':attribute está fora dos limites',
        ];

    }
}
