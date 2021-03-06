<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTwitterRequest extends FormRequest
{
    protected $rules = [
        'twitter_name'  => 'required|alpha_dash|max:30',
        'twitter_id'    => 'required|integer|min:1',
        'analysis_val'  => 'required|numeric',
        'mi_val'        => 'required|numeric',
        'sentiment_val' => 'required|numeric',
        'media_val'     => 'required|numeric',
        'tweet_count'   => 'required|integer|min:1',
        'protect'       => 'required|boolean',
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
