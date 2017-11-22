<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTwitterRequest extends FormRequest
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
            'name' =>  'required|max:30',
			'twitterID' => 'required|max:30',
			'pol_var' => 'required',
            'lib_var' => 'required',
            'fpol_var' => 'required',
            'flib_var' => 'required',
			'protect' => 'required',
        ];
    }
}
