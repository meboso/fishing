<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainlineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'mainline.main_lines' => 'required|string',
        ];
    }
}
