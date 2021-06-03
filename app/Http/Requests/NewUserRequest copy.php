<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest; 

class NewUserRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

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
            'name' => ['required','min:5','max:50'],
            'email' => ['required', 'email'], //email:rfc,dns
            'role' => ['required']
        ];
    }

    /**
     * Rename the english attributes
     * 
     */
    public function attributes()
    {
        return [
            'name' => 'ime',
            'email' => 'email adresa',
            'role' => 'uloga'
        ];
    }

    /**
     * Get the validation messages.
     *
     * @return array
     */
    public function messages()
    {
      return [
        'required' => 'Polje :attribute ne smije biti prazno.',
        'min' => 'Polje :attribute ne smije biti kraće od :min slovnih mjesta.',
        'max' => 'Polje :attribute ne smije biti duže od :max slovnih mjesta.',
        'email' => 'Polje :attribute mora biti validna email adresa.'
      ];
    }  
}
