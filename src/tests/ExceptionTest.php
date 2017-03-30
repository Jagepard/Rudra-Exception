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
use Rudra\IContainer;
use Rudra\Container;
use Rudra\DBException;
use Rudra\RouterException;

/**
 * Class ExceptionTest
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var IContainer
     */
    protected $container;

    protected function setUp(): void
    {
        $this->container = Container::app();
        $this->container->setBinding(IContainer::class, Container::$app);
    }

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
}