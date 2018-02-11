<?php

namespace App\Http\Requests\airport;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            //
            'airport_name'=>'Required',
            'code'=>'Required',
            'city'=>'Required'
        ];
    }
    public function messages()
    {
      return [
        'airport_name.required' => 'Nama Airport tidak boleh kosong.',
        'code.required' => 'code tidak boleh kosong.',
        'city.required' => 'city tidak boleh kosong.'
      ];
    }
}
