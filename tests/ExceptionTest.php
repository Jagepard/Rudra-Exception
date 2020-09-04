<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

use Rudra\Exceptions\DBException;
use Rudra\Exceptions\RouterException;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class RudraExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testDBException()
    {
        $this->expectException(DBException::class);
        throw new DBException("No way to work with database data has been selected");
    }

    public function testRouterException()
    {
        $this->expectException(RouterException::class);
        throw new RouterException("404");
    }
}
