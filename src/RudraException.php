<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Container\Facades\Rudra as Rudra;
use Rudra\Router\RouterFacade as Router;

class RudraException extends Exception
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        @set_exception_handler([$this, 'exception_handler']);
    }

    public function exception_handler($exception)
    {
        Router::directCall([0, 0, Rudra::config()->get("http.errors")[$exception->getMessage()]]);
    }
}
