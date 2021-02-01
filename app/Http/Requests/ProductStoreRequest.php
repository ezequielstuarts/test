<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'Este producto ya existe',
            'price.required' => 'El precio es requerido',
            'price.numeric' => 'El precio debe ser numerico',
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:products,name',
            'price' => 'required|numeric|min:0'
        ];
    }
}
