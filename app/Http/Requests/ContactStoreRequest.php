<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'name' => 'required|min:1|max:30',
            'email'=> 'required|email',
            'company'=>'nullable|min:1,max:150',
            'birthday'=>'nullable|Date',
            'description'=>'nullable|min:1|max:200'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>"Please Enter Name",
            'email.required'=>"Please Enter Email",
        ];
    }
}
