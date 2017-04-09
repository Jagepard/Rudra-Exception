<?php

declare(strict_types = 1);

/**
 * Date: 10.02.17
 * Time: 18:45
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Rudra;


use App\Config;
use Exception;


/**
 * Class RouterException
 *
 * @package Rudra
 */
class RouterException extends Exception
{

    /**
     * @codeCoverageIgnore
     * @param $exception
     */
    public function handler($exception)
    {
        if ('404' == $exception->getMessage()) {
            Container::$app->get('router')->directCall(Config::HTTP_ERRORS['404']);
        }
    }
}
