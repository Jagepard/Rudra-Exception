<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru">
 * @license https://mit-license.org/ MIT
 */

use PHPUnit\Framework\TestCase;
use Rudra\Exceptions\DBException;
use Rudra\Exceptions\LogicException;
use Rudra\Exceptions\RudraException;
use Rudra\Exceptions\RouterException;
use Rudra\Exceptions\RequestException;
use Rudra\Exceptions\DatabaseException;
use Rudra\Exceptions\NotFoundException;
use Rudra\Exceptions\EnvironmentException;
use Rudra\Exceptions\ConfigurationException;

class ExceptionTest extends TestCase
{
    protected function tearDown(): void
    {
        restore_exception_handler();
    }

    public function testDBException()
    {
        $this->expectException(DBException::class);
        throw new DBException("Some message");
    }

    public function testConfigurationException()
    {
        $this->expectException(ConfigurationException::class);
        throw new ConfigurationException("Some message");
    }

    public function testDatabaseException()
    {
        $this->expectException(DatabaseException::class);
        throw new DatabaseException("Some message");
    }

    public function testEnvironmentException()
    {
        $this->expectException(EnvironmentException::class);
        throw new EnvironmentException("Some message");
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

    public function testRequestException()
    {
        $this->expectException(RequestException::class);
        throw new RequestException("Some message");
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
}
