<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            'logo' => 'required_without:id|mimes:jpg,jpeg,png',
            'name' => 'required|string|max:100',
            'mobile' =>'required|max:100|unique:vendors,mobile,'.$this->id,
            'email'  => 'sometimes|nullable|unique:vendors,email,'.$this->id,
            'category_id'  => 'required|exists:main_categories,id',
            'address'   => 'required|string|max:500',
            'password'=>'required_without:id'

        ];
    }

    public function messages()
    {
        return [
          'required' =>'ce champ est obligatoire',
            'max' =>'ce champ est long',
            'category_id.exists'=>'ce champ nexiste pas',
            'email.email'=>'la format du email est incorrecté',
            'address.string'=>'address dois contenir des chiffre et des lettres',
            'name.string'=>'name dois contenir des chiffre et des lettres',
            'logo.required_without'=>'le logo est obligatoire',
            'email.unique'=>'l email est deja étulise',
            'mobile.unique'=>'le numero téléphonique est deja étulise'
        ];
    }
}
