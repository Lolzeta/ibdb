<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
        return [
            'title'       =>    'required|min:3',
            'author'      =>    'required|min:3',
            'description' =>    'required'
        ];
    }

    public function messages(){
      return [
       'title.required'          =>   'El :attribute es necesario',
       'title.min'               =>   'El :attribute debe de tener minimo tres caracteres',
       'author.required'         =>   'El :attribute es necesario',
       'author.min'              =>   'El :attribute debe tener minimo tres caracteres',
       'description.required'    =>   'La :attribute es necesaria'
        ];
    }

    public function attributes(){
      return [
        'title'   => 'titulo del libro',
        'author'  =>  'autor del libro',
        'description' =>  'descripcion del libro'
      ];
    }
}
