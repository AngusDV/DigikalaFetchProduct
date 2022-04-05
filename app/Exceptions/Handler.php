<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Http\Resources\BaseResource;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function render($request,Throwable $e)
    {
        if($e instanceof AuthenticationException){
            if($request->expectsJson()){
                return BaseResource::falseResponse("لطفا به حساب کاربری خود وارد شوید");
            }
            alert()->error('خطا!','لطفا به حساب کاربری خود وارد شوید')->showConfirmButton('باشه!', '#3085d6');

            return back();
        }
        if ($e instanceof ValidationException){
            $message =  $this->generateStringErrorMessage(@$e->validator->errors()->getMessageBag()->getMessages());
            if ($request->expectsJson() || strpos($request->url(), '/api/v1') !== false)
                return new JsonResponse(['IsSuccess' => false,
                    'code' => 403,
                    'message' => $message,
                    'result' => null
                ], 400);
            else {
                alert()->error('خطا!',$message)->showConfirmButton('باشه!', '#3085d6');
                return back()->withInput();
            }

        }

        if(env('APP_ENV')=="production") {
            if (!$request->wantsJson()) {
                alert()->error( "خطا",$e->getMessage())->showConfirmButton('باشه!', '#3085d6');
                return back();
            } else {
                return new JsonResponse(['IsSuccess' => false,
                    'code' => 403,
                    'message' => $e->getMessage(),
                    'result' => null
                ], 400);
            }
        }
        return parent::render($request,$e);

    }

    private function generateStringErrorMessage(array $errors)
    {
        $message = '';
        foreach ($errors as $error) {
            $message .= implode(',', array_values($error)) . chr(10);
        }
        return $message;
    }

}
