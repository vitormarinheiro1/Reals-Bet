<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AffiliatesFormRequest extends FormRequest
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
            'name' => 'required',
            'cpf' => ['required', 'min:11', 'max:11'],
            'birth_date' => 'required',
            'email' => 'required',
            'phone' => ['required', 'min:11', 'max:11'],
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.min' => 'O campo CPF precisa ter pelo menos :min caracteres.',
            'cpf.max' => 'O campo CPF precisa ter no máximo :max caracteres.',
            'birth_date.required' => 'O campo data nascimento é obrigatório.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'phone.required' => 'O campo telefone é obrigatório.',
            'phone.min' => 'O campo telefone precisa ter pelo menos :min caracteres.',
            'phone.max' => 'O campo telefone precisa ter no máximo :max caracteres.',
            'address.required' => 'O campo endereço é obrigatório.',
            'state.required' => 'O campo estado é obrigatório.',
            'city.required' => 'O campo cidade é obrigatório.',
        ];
    }
}
