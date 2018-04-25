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

    use SetContainerTrait;

    /**
     * DBException constructor.
     * @param ContainerInterface $container
     * @param string             $message
     * @param int                $code
     * @param Exception|null     $previous
     */
    public function __construct(ContainerInterface $container, $message = "", $code = 0, Exception $previous = null)
    {
        $this->container = $container;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @param $exception
     */
    public function handler($exception)
    {
        $this->container()->get('debugbar')['exceptions']->addException($exception);
        $this->container()->get('router')->directCall($this->container()->config('http.errors', '503'));
    }
}
