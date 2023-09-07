<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
        return [
            'codigo'            => "required",
            'descricao'         => 'required',
            'custoProducao'     => 'required|numeric|between:0,1000',
            'unidade'           => 'required',
            'quantidadeEstoque' => 'required|numeric|between:0,1000',
        ];
    }

    public function messages(): array
    {
        return [
            'codigo.required'           => ':attribute é obrigatório',
            'codigo.unique'             => ":attribute já existe no sistema",
            'descricao.required'        => ':attribute é obrigatório',
            'descricao.numeric'         => ':attribute inválido',
            'descricao.between'         => ':attribute está fora dos limites',
            'custoProducao.required'    => ':attribute é obrigatório',
            'custoProducao.integer'     => ':attribute inválido',
            'custoProducao.between'     => ':attribute está fora dos limites',
            'unidade.required'          => ':attribute é obrigatório',
            'unidade.integer'           => ':attribute inválido',
            'unidade.between'           => ':attribute está fora dos limites',
        ];

    }
}
