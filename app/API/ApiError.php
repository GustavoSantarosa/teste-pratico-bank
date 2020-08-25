<?php

namespace App\API;
/**
 * Codigos de retorno: https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Status
 */
class ApiError
{
    public static function errorMessage($message, $code)
    {
        return [
            'data' => [
                'msg'   => $message,
                'code'  => $code
            ]
            ];
    }
}
