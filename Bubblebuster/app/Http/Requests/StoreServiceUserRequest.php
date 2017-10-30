<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *Note: We make authorization elsewhere, so if the user can make
     * this request in the first place, they are authorized.
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
            'service_name' => 'required|max:30',
            'password' => 'required|min:6',
        ];
    }
}
