<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $geral = array(
            'nome' => 'required',
            'password' => 'required',
            'Date' => 'required',
            'endereco' => 'required'
    );

    if($this->method('PUT'))
    {
        $unicos = array(
            'email' => ['required', Rule::unique('clientes', 'email')->ignore($this->route('cliente'))],
            'CPF' => ['required', Rule::unique('clientes', 'CPF')->ignore($this->route('cliente'))],
            'RG' => ['required', Rule::unique('clientes', 'RG')->ignore($this->route('cliente'))],
            'Fone' => ['required', Rule::unique('clientes', 'Fone')->ignore($this->route('cliente'))]
        );
    }
    else if($this->method('POST'))
    {
        $unicos = array(
            'email' => ['required', 'email','unique:clientes'],
            'CPF' => ['required', 'CPF', 'unique:clientes'],
            'RG' => ['required', 'RG', 'unique:clientes'],
            'Fone' => ['required', 'Fone', 'unique:clientes']
        );
    }


        return array_merge($geral, $unicos);
    }
    public function attributes()
    {
        return[
            
            'nome'=>'Nome Completo',
            'email'=>'email',
            'password'=>'senha',
            'Date'=>'data de nascimento',
            'endereco'=>'endereço',
            'CPF'=>'cpf',
            'RG'=>'rg',
            'Fone'=>'Contato'


        ];
    }
}
