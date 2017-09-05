<?php

declare(strict_types = 1);

/**
 * Date: 11.02.17
 * Time: 18:16
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Rudra;


use Exception;


/**
 * Class DBException
 *
 * @package Rudra
 */
class AnnotationException extends Exception
{

    /**
     * @codeCoverageIgnore
     * @param $exception
     *
     * @return bool
     */
    public function handler($exception)
    {
        if (DEV) {
            return !d($exception->getMessage());
        }

        Container::$app->set('router', new Router(Container::$app, Container::$app->config('default.namespace')));
        Container::$app->get('router')->directCall(Container::$app->config('http.errors', '503'));
    }
}
