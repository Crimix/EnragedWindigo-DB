<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTwitterRequest extends FormRequest
{
    protected $rules = [
        'name' =>  'required|string|max:50',
        'twitterID' => 'required|alpha_dash|max:30',
        'pol_var' => 'required|numeric',
        'protect' => 'required|boolean',
    ];

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
        return $this->rules;
    }
}
