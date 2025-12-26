<?php

declare(strict_types=1);

/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 *
 * @author  Korotkov Danila (Jagepard) <jagepard@yandex.ru>
 * @license https://mozilla.org/MPL/2.0/  MPL-2.0
 */

namespace Rudra\Exceptions;

use Exception;
use Rudra\Router\RouterFacade as Router;
use Rudra\Container\Facades\Rudra as Rudra;
use Rudra\Redirect\RedirectFacade as Redirect;

/**
 * Represents an exception that occurs during route registration or dispatching.
 * This exception is used when a route cannot be matched or dispatched correctly.
 *
 * When thrown, it triggers a custom exception handler to:
 * - Set the appropriate HTTP error code
 * - Dispatch the corresponding error controller action
 *
 * Example:
 * ```php
 * throw new \Rudra\Exceptions\RouterException("404");
 * ```
 *
 * Will redirect to the configured error handler for "404" (if defined).
 * -------------------------
 * Представляет исключение, возникающее при регистрации или диспетчеризации маршрутов.
 * Используется, когда маршрут не может быть найден или выполнен корректно.
 *
 * При выбрасывании исключения вызывается собственный обработчик ошибок, который:
 * - Устанавливает соответствующий HTTP-код ошибки
 * - Вызывает настроенный контроллер ошибки
 *
 * Пример:
 * ```php
 * throw new \Rudra\Exceptions\RouterException("404");
 * ```
 *
 * Перенаправит на обработчик ошибок, определённый в конфигурации для кода "404".
 */
class RouterException extends RudraException
{
    /**
     * Constructs a new RouterException and sets a global exception handler.
     *
     * The exception handler will catch all unhandled exceptions of this type
     * and redirect them using RedirectFacade to the appropriate error page/controller.
     * -------------------------
     * Конструктор RouterException устанавливает глобальный обработчик исключений.
     *
     * Обработчик перехватывает все неперехваченные исключения этого типа
     * и вызывает RedirectFacade для перехода к странице/контроллеру ошибки.
     *
     * @param string $message
     * @param int    $code
     * @param \Exception|null $previous
     */
    public function __construct($message = "", $code = 0, ?Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        @set_exception_handler([$this, 'exception_handler']);
    }

    /**
     * Custom exception handler triggered by this class.
     *
     * Uses RedirectFacade to send an HTTP status code and then calls the error handler,
     * which is defined in the config under `http.errors`.
     * -------------------------
     * Собственный обработчик исключений, запускаемый этим классом.
     *
     * Использует RedirectFacade для отправки HTTP-статуса и вызова обработчика ошибок,
     * указанного в конфигурации под ключом `http.errors`.
     * 
     * @param  \Exception $exception
     * @return void
     */
    public function exception_handler(\Exception $exception): void
    {
        Redirect::responseCode($exception->getMessage());
        Router::directCall(Rudra::config()->get("http.errors")[$exception->getMessage()]);
    }
}
