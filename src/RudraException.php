<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @copyright Copyright (c) 2019, Jagepard
 * @license   https://mit-license.org/ MIT
 */

namespace Rudra\Exceptions;

use Exception;

class RudraException extends Exception
{
    protected $standalone;

    /**
     * RudraException constructor.
     * @param string         $message
     * @param bool           $standalone
     * @param int            $code
     * @param Exception|null $previous
     */
    public function __construct($message = "", bool $standalone = true, $code = 0, Exception $previous = null)
    {
        $this->standalone = $standalone;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @param $exception
     */
    public function handler($exception)
    {
        if ($this->standalone && (config('env') !== 'development')) {
            throw $exception;
        }

        rudra()->get('debugbar')['exceptions']->addException($exception);
        rudra()->get('router')->directCall(config('http.errors', '503'));
    }
}
