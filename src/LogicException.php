<?php declare(strict_types=1);

/**
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at https://mozilla.org/MPL/2.0/.
 *
 * @author  Korotkov Danila (Jagepard) <jagepard@yandex.ru>
 * @license https://mozilla.org/MPL/2.0/  MPL-2.0
 */

namespace Rudra\Exceptions;

/**
 * An exception that indicates errors in the program logic.
 * This type of exception should lead directly to code fixes — these are not runtime issues,
 * but problems in implementation, configuration or incorrect use of the API.
 *
 * This class extends RudraException and implements ExceptionInterface,
 * making it part of the unified exception hierarchy for the Rudra framework.
 *
 * Example:
 * ```php
 * if (!method_exists($controller, $action)) {
 *     throw new \Rudra\Exceptions\RouterException("503");
 * }
 * ```
 * ---------------------
 * Исключение, указывающее на ошибки логики программы.
 * Такие ошибки должны приводить к исправлениям в коде — это не ошибки времени выполнения,
 * а проблемы реализации, конфигурации или неверного использования API.
 *
 * Этот класс расширяет RudraException и реализует ExceptionInterface,
 * что делает его частью единой системы исключений фреймворка Rudra.
 *
 * Пример:
 * ```php
 * if (!method_exists($controller, $action)) {
 *     throw new \Rudra\Exceptions\RouterException("503");
 * }
 * ```
 */
class LogicException extends RudraException implements ExceptionInterface {}
