<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @copyright Copyright (c) 2019, Jagepard
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

class RouterException extends RudraException
{
    /**
     * @param $exception
     */
    public function handler($exception)
    {
        if ($this->standalone && (config('env') !== 'development')) {
            throw $exception;
        }

        rudra()->get('debugbar')['exceptions']->addException($exception);
        rudra()->get('router')->directCall(config('http.errors', $exception->getMessage()));
    }
}
