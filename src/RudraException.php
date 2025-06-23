<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license   https://mit-license.org/  MIT
 */

namespace Rudra\Exceptions;

use RuntimeException;

/**
 * RudraException
 * ==============
 *
 * Base exception class for all exceptions thrown by the Rudra framework.
 * This class serves as the root of the exception hierarchy and implements ExceptionInterface.
 *
 * It's designed to:
 * - Provide a common ancestor for all framework-related exceptions
 * - Allow unified handling or catching of multiple exception types
 * - Support categorization and filtering in larger applications or libraries
 *
 * All custom exceptions in the Rudra project should extend this class or one of its descendants.
 *
 * Example:
 * ```php
 * try {
 *     $router->set($route);
 * } catch (\Rudra\Exceptions\RudraException $e) {
 *     // Handle any Rudra-related exception uniformly
 * }
 * ```
 *
 * @package Rudra\Exceptions
 * ----------------------------------------------------------------------------
 * RudraException
 * ==============
 *
 * Базовый класс исключений для всех ошибок, генерируемых фреймворком Rudra.
 * Этот класс служит корневым элементом иерархии исключений и реализует ExceptionInterface.
 *
 * Он предназначен для:
 * - Обеспечения общей точки наследования для всех исключений фреймворка
 * - Единой обработки или отлова всех типов исключений
 * - Группировки и фильтрации ошибок в крупных приложениях и библиотеках
 *
 * Все пользовательские исключения в проекте Rudra должны наследоваться от этого класса
 * или его потомков.
 *
 * Пример:
 * ```php
 * try {
 *     $router->set($route);
 * } catch (\Rudra\Exceptions\RudraException $e) {
 *     // Единым образом обрабатываем любые исключения Rudra
 * }
 * ```
 *
 * @package Rudra\Exceptions
 */
class RudraException extends RuntimeException implements ExceptionInterface
{
    // Пустой класс — используется как базовый для всех пользовательских исключений
}
