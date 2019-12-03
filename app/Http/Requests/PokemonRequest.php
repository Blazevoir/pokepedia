<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function attributes(){
         return [
             'nombre' => 'Nombre del pokemon',
             'tipo' => 'Tipo del pokemon',
             'peso' => 'Peso del pokemon',
             'estatura' => 'Estatura del pokemon',
             'foto' => 'Foto del pokemon',
             'ataque' => 'Ataque del pokemon',
             ];
     }
     
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
        return [
            'nombre'        => 'required',
            'tipo'          => 'required',
            'peso'          => 'required|numeric',
            'estatura'      => 'required|numeric',
            'foto'          => 'required',
            'ataque'        => 'required',
        ];
    }
}
