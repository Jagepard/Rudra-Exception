<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Rudra\Exceptions;

/**
 * Class RouterException
 * @package Rudra
 */
class RouterException extends RudraException
{

    /**
     * @param $exception
     */
    public function handler($exception)
    {
        if ($this->container->config('env') == 'development') {
            dd($exception);
        }

        $this->container->get('debugbar')['exceptions']->addException($exception);
        $this->container->get('router')->directCall($this->container->config('http.errors', $exception->getMessage()));
    }
}
