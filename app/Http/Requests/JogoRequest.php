<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class JogoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|max:50',
            'preco'=> 'required|numeric|between:0,100000',
            'desenvolvedor'=> 'required|max:50',
            'distribuidor'=> 'required|max:50',
            'genero'=> 'required|max:50'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required'=> 'Nome é obrigatório',
            'nome.max'=> 'Máximo 50 caracteres',
            'preco.*'=> 'Preço obrigatório, entre 0 e R$ 100.000,00',
            'desenvolvedor'=> 'Máximo 50 caracteres',
            'distribuidor'=> 'Máximo 50 caracteres',
            'genero'=> 'Máximo 50 caracteres'
        ];
    }
}