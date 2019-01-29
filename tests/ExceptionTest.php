<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use Rudra\Exceptions\DBException;
use Rudra\Exceptions\RouterException;
use Rudra\Exceptions\AnnotationException;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class RudraExceptionTest
 */
class RudraExceptionTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {

    }

    public function testDBException()
    {
        $this->expectException(DBException::class);
        throw new DBException(rudra(), 'Не выбран способ работы с данными БД');
    }

    public function testRouterException()
    {
        $this->expectException(RouterException::class);
        throw new RouterException(rudra(), '404');
    }

    public function testAnnotationException()
    {
        $this->expectException(AnnotationException::class);
        throw new AnnotationException(rudra(), 'Ошибка парсинга аннотаций');
    }
}