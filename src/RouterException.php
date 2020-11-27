<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Container\Facades\Rudra as Rudra;

class RouterException extends RudraException
{
    public function handler(/*Exception*/ $exception)
    {
        if (Rudra::config()->get("environment") !== "development") {
            Rudra::get("router")
                ->directCall(Rudra::config()->get("http.errors")[$exception->getMessage()]);
        }

        throw $exception;
    }
}
