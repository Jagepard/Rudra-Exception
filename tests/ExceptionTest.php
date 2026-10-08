<?php declare(strict_types=1);

/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 *
 * @author  Korotkov Danila (Jagepard) <jagepard@yandex.ru>
 * @license https://mozilla.org/MPL/2.0/  MPL-2.0
 */

use Rudra\Exceptions\LogicException;
use Rudra\Exceptions\RudraException;
use Rudra\Exceptions\RouterException;
use Rudra\Exceptions\RuntimeException;
use Rudra\Exceptions\NotFoundException;
use Rudra\Exceptions\MiddlewareException;

class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    protected function tearDown(): void
    {
        restore_exception_handler();
    }

    public function testLogicException()
    {
        $this->expectException(LogicException::class);
        throw new LogicException('Some message');
    }

    public function testNotFoundException()
    {
        $this->expectException(NotFoundException::class);
        throw new NotFoundException('Some message');
    }

    public function testRouterException()
    {
        $this->expectException(RouterException::class);
        throw new RouterException('Not Found', 404);
    }

    public function testRudraException()
    {
        $this->expectException(RudraException::class);
        throw new RudraException('Some message');
    }

    public function testRuntimeException()
    {
        $this->expectException(RuntimeException::class);
        throw new RuntimeException('Some message');
    }

    public function testMiddlewareException()
    {
        $this->expectException(MiddlewareException::class);
        throw new MiddlewareException('Some message');
    }
}
