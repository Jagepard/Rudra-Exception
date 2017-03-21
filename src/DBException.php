<?php

/**
 * Date: 11.02.17
 * Time: 18:16
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Rudra;

use App\Config;
use Exception;


class DBException extends Exception
{

    /**
     * @param $exception
     *
     * @return bool
     */
    public function handler($exception)
    {
        if (DEV) {
            return !d($exception->getMessage());
        }

        Container::$app->set('router', new Router(Container::$app, Config::DEFAULT_NAMESPACE));
        Container::$app->get('router')->directCall(Config::HTTP_ERRORS['503']);
    }
}