<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachhangCreateRequest extends FormRequest
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
                'kh_email' => 'required|unique:khachhang',
        ];
    }

    public function messages()
    {
        return [
            'kh_email.unique' => 'email không được trùng',
        ];
    }
}
