<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru">
 * @license https://mit-license.org/    MIT
 */

namespace Rudra\Exceptions;

use Rudra\Exceptions\ExceptionInterface;

/**
 * An exception that is thrown when a middleware-related error occurs,
 * such as an invalid format, missing class, or incorrect parameters.
 *
 * This exception is typically used in the routing and middleware execution layer
 * of the framework to indicate issues with:
 * - Invalid or unsupported middleware format
 * - Missing or non-callable middleware class
 * - Incorrect parameter handling
 *
 * It extends Rudra\Exception\LogicException to indicate that the problem is related to application logic
 * and not runtime behavior.
 *
 * This exception implements ExceptionInterface for unified filtering and catching across the framework.
 * ---------------------
 * Исключение, выбрасываемое при возникновении ошибки, связанной с middleware, например:
 * - Неверный формат middleware
 * - Отсутствующий или неназванный класс middleware
 * - Некорректная передача параметров
 *
 * Это исключение обычно используется на уровне маршрутизации и выполнения middleware для указания проблем с:
 * - Неподдерживаемым форматом middleware
 * - Отсутствием вызываемого метода __invoke()
 * - Ошибками в параметрах
 *
 * Расширяет \Rudra\Exceptions\LogicException, чтобы показать, что проблема связана с логикой приложения,
 * а не с состоянием среды выполнения.
 *
 * Реализует ExceptionInterface для унифицированной обработки всех исключений в рамках фреймворка.
 */
class MiddlewareException extends LogicException implements ExceptionInterface {}
