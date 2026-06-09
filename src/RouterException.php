<?php declare(strict_types=1);

/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 *
 * @author  Korotkov Danila (Jagepard) <jagepard@yandex.ru>
 * @license https://mozilla.org/MPL/2.0/  MPL-2.0
 */

namespace Rudra\Exceptions;

use Throwable;
use Rudra\Router\RouterFacade as Router;
use Rudra\Container\Facades\Rudra as Rudra;
use Rudra\Redirect\RedirectFacade as Redirect;

/**
 * Represents an exception that occurs during route registration or dispatching.
 * This exception is used when a route cannot be matched or dispatched correctly.
 */
class RouterException extends RudraException
{
    /**
     * Constructs a new RouterException and sets a global exception handler.
     */
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        @set_exception_handler([$this, 'exception_handler']);
    }

    /**
     * Custom exception handler triggered by this class.
     * Uses RedirectFacade to send an HTTP status code and then calls the error handler.
     */
    public function exception_handler(Throwable $exception): void
    {
        Redirect::responseCode($exception->getCode());
        Router::directCall(Rudra::config()->get("http.errors")[$exception->getCode()]);
    }
}
