<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

abstract class BaseCollection extends ResourceCollection
{
    public function __construct($resource)
    {
        self::withoutWrapping();
        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            'isSuccess' => true,
            'code' => 200,
            'result' => $this->collection,
            'message' => "",
        ];
    }
}
