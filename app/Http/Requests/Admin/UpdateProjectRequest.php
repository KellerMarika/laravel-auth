<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       /*  if(Auth::user()->is_admin == true){ */
            return true;
       /*  }; */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            /* validazione triste */
            'title' => 'required|min:80|max:225',
            'type' => 'requred|max:225',
            'completed' => 'requred|boolean',
            'img' => 'string',
            'description' => 'string'
        ];
    }
}
