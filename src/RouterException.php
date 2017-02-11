<?php

/**
 * Date: 10.02.17
 * Time: 18:45
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Rudra;

use App\Config\Config;
use Exception;

class RouterException extends Exception
{

    /**
     * @param $exception
     */
    public function handler($exception)
    {
        if ('404' == $exception->getMessage()) {
            App::get('router')->directCall(Config::HTTP_ERRORS['404']);
        }
    }

}