<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Container\Application;

class RouterException extends RudraException
{
    public function handler(Exception $exception)
    {
        if (Application::run()->config()->get("environment") !== "development") {
            Application::run()->objects()->get("router")
                ->directCall(Application::run()->config()->get("http.errors")[$exception->getMessage()]);
        }

        throw $exception;
    }
}
