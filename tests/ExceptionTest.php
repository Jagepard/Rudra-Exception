<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru">
 * @license https://mit-license.org/ MIT
 */

use Rudra\Exceptions\{
    LogicException, 
    RudraException, 
    RouterException,
    RuntimeException, 
    NotFoundException, 
    MiddlewareException, 
};
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    protected function tearDown(): void
    {
        restore_exception_handler();
    }

    public function testLogicException()
    {
        $this->expectException(LogicException::class);
        throw new LogicException("Some message");
    }

    public function testNotFoundException()
    {
        $this->expectException(NotFoundException::class);
        throw new NotFoundException("Some message");
    }

    public function testRouterException()
    {
        $this->expectException(RouterException::class);
        throw new RouterException("404");
    }

    public function testRudraException()
    {
        $this->expectException(RudraException::class);
        throw new RudraException("Some message");
    }

    public function testRuntimeException()
    {
        $this->expectException(RuntimeException::class);
        throw new RuntimeException("Some message");
    }

    public function testMiddlewareException()
    {
        $this->expectException(MiddlewareException::class);
        throw new MiddlewareException("Some message");
    }
}
