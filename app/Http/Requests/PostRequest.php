<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function attributes(){
         return [
             'pokemon_id' => 'ID del pokemon',
             'asunto' => 'Asunto del post',
             'contenido' => 'Contenido del post',
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
            'pokemon_id'    => 'required|numeric',
            'asunto'        => 'required',
            'contenido'     => 'required',
        ];
    }
}
