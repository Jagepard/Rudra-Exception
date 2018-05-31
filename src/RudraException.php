<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Interfaces\ContainerInterface;

/**
 * Class RudraException
 * @package Rudra
 */
class RudraException extends Exception
{

    protected $container;

    /**
     * RudraException constructor.
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
        if ($this->container->config('env') == 'development') {
            dd($exception);
        }

        $this->container->get('debugbar')['exceptions']->addException($exception);
        $this->container->get('router')->directCall($this->container->config('http.errors', '503'));
    }
}
