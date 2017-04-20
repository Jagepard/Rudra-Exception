<?php

declare(strict_types = 1);

/**
 * Date: 30.03.17
 * Time: 14:20
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */


use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Rudra\DBException;
use Rudra\RouterException;
use Rudra\AnnotationException;

/**
 * Class ExceptionTest
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
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