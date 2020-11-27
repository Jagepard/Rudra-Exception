<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Container\Rudra;

class RouterException extends RudraException
{
    public function handler(Exception $exception)
    {
        if (Rudra::run()->config()->get("environment") !== "development") {
            Rudra::run()->objects()->get("router")
                ->directCall(Rudra::run()->config()->get("http.errors")[$exception->getMessage()]);
        }

        throw $exception;
    }
}
