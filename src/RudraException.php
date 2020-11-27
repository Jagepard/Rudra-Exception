<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Container\Facades\Rudra as Rudra;

class RudraException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function handler(/*Exception*/ $exception)
    {
        if (Rudra::config()->get("environment") !== "development") {
            Rudra::get("router")->directCall(Rudra::config()->get("http.errors")["503"]);
        }

        throw $exception;
    }
}
