<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
            'brand_name_en' => 'required',
            'brand_name_hin' => 'required',
            'brand_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'brand_name_en.required' => 'Input Brand English Name',
            'brand_name_hin.required' => 'Input Brand farsi Name',
        ];
    }
}