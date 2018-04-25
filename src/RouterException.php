<?php

declare(strict_types=1);

/**
 * Date: 10.02.17 Updated 25.04.18
 * Time: 18:45
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Rudra;


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
        $this->container()->get('debugbar')['exceptions']->addException($exception);
        $this->container()->get('router')->directCall($this->container()->config('http.errors', $exception->getMessage()));
    }
}
