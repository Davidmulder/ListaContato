<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoFormRequest extends FormRequest
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
            //
            'nome'=> ['required','min:5','max:50'],
            'contato'=> ['required','min:9','max:50'],
            'email'=> ['required','email:rfc,dns']




        ];
    }

    public function messages()  #pernalizar suas mensagens
    {
        return
        [
            'required' =>  "O campo :attribute é obrigatório",
            'email.required'=> 'Campo nome é obrigatorio e email valido',
            'nome.min'     => 'o campo nome precisa de pelo menos 5 carateres e maximo 50',
            'contato.min'  => "o campo nome precisa de pelo menos 9 carateres e maximo 50"
        ];
    }
}



