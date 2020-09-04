<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Container\Application;

class RudraException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function handler(Exception $exception)
    {
        if (Application::run()->config()->get("environment") !== "development") {
            Application::run()->objects()->get("router")
                ->directCall(Application::run()->config()->get("http.errors")["503"]);
        }

        throw $exception;
    }
}
