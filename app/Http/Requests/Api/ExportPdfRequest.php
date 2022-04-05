<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class ExportPdfRequest extends BaseRequest
{
    public function all($keys = null)
    {
        $data = parent::all($keys);
        $data['slug'] =  $this->route('slug');
        return $data;
    }

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
