<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru">
 * @license https://mit-license.org/ MIT
 */

use Rudra\Exceptions\RouterException;

if (!function_exists('abort')) {
    function abort(int $code): void
    {
        throw new RouterException($code);
    }
}

