<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Container\Facades\Rudra as Rudra;
use Rudra\Router\Router;

class RouterException extends RudraException
{
    public function handler(/*Exception*/ $exception)
    {
        Rudra::get(Router::class)->directCall(Rudra::config()->get("http.errors")[$exception->getMessage()]);
    }
}
