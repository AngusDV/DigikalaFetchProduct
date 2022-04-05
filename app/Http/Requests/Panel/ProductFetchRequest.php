<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class ProductFetchRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "slug" => "required|regex:/^.*-.*$/"
        ];
    }

    public function attributes()
    {
        return [
            "slug" => "شناسه محصول"
        ];
    }
}
