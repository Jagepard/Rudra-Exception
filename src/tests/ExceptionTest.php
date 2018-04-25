<?php

declare(strict_types=1);

/**
 * Date: 30.03.17
 * Time: 14:20
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use Rudra\Container;
use Rudra\DBException;
use Rudra\RouterException;
use Rudra\AnnotationException;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class ExceptionTest
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {

    }

//    public function testDBExceptionHandler()
//    {
//        $exception = new DBException(Container::app(), 'Не выбран способ работы с данными БД');
//
//        $this->assertEquals('Не выбран способ работы с данными БД', $exception->handler($exception));
//    }

    public function testDBException()
    {
        $this->expectException(DBException::class);
        throw new DBException(Container::app(), 'Не выбран способ работы с данными БД');
    }

    public function testRouterException()
    {
        $this->expectException(RouterException::class);
        throw new RouterException(Container::app(), '404');
    }

    public function testAnnotationException()
    {
        $this->expectException(AnnotationException::class);
        throw new AnnotationException(Container::app(), 'Ошибка парсинга аннотаций');
    }
}