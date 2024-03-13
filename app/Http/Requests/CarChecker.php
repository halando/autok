<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CarChecker extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required",
            "amount"=>"required|numeric",
            "type"=>"required",
            "color"=>"required"
        ];
    }
    
    public function messages(){
        return [
            "name.required"=>"Name kitöltése kötelező",
            "amount.required"=>"Amount kötelező",
            "amount.numeric"=>"Amount szám típúsú kell legyen",
            "type.required"=>"Type kitöltése kötelező",
            "color.required"=>"Color kitöltése kötelező",
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            "success"=>false,
            "message"=>"Adatbeviteli hiba",
            "data"=>$validator->errors()
        ]));
    }
}
