<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseResource extends JsonResource
{

    public $with = [
        'isSuccess' => true,
        'code' => Response::HTTP_OK,
        'message' => "",
    ];
    public static $wrap='result';
    public static function falseResponse($message, $code = Response::HTTP_BAD_REQUEST, $data = null)
    {
        return new JsonResponse([
            'isSuccess' => false,
            'code' => $code,
            'result' => $data,
            'message' => $message,
        ], $code);
    }

    public static function trueResponse($message = '', $data = null, $code = Response::HTTP_OK)
    {
        return new JsonResponse([
            'isSuccess' => true,
            'code' => $code,
            'result' => $data,
            'message' => $message,
        ], $code);
    }
    public static function falseResponseData($message, $code = Response::HTTP_BAD_REQUEST, $data = null)
    {
        return json_encode([
            'isSuccess' => false,
            'code' => $code,
            'result' => $data,
            'message' => $message,
        ], $code);
    }

    public static function trueResponseData($message = '', $data = null, $code = Response::HTTP_OK)
    {
        return json_encode([
            'isSuccess' => true,
            'code' => $code,
            'result' => $data,
            'message' => $message,
        ], $code);
    }
}
