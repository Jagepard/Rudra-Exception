<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru">
 * @license https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Router\RouterFacade as Router;
use Rudra\Container\Facades\Rudra as Rudra;
use Rudra\Redirect\RedirectFacade as Redirect;

class RouterException extends RudraException
{
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        @set_exception_handler([$this, 'exception_handler']);
    }

    public function exception_handler($exception)
    {
        Redirect::responseCode($exception->getMessage());
        Router::directCall(Rudra::config()->get("http.errors")[$exception->getMessage()]);
    }
}
