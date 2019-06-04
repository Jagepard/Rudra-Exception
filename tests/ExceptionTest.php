<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @copyright Copyright (c) 2019, Jagepard
 * @license   https://mit-license.org/ MIT
 */

use Rudra\Exceptions\DBException;
use Rudra\Exceptions\RouterException;
use Rudra\Exceptions\AnnotationException;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class RudraExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testDBException()
    {
        $this->expectException(DBException::class);
        throw new DBException('Не выбран способ работы с данными БД');
    }

    public function testRouterException()
    {
        $this->expectException(RouterException::class);
        throw new RouterException('404');
    }

    public function testAnnotationException()
    {
        $this->expectException(AnnotationException::class);
        throw new AnnotationException('Ошибка парсинга аннотаций');
    }
}
