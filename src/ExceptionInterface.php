<?php

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
 * A marker interface used to tag all custom exceptions within the Rudra framework.
 *
 * This empty interface serves as a common base for grouping and filtering exceptions,
 * making it easier to catch or identify all exceptions originating from the Rudra project.
 *
 * It is especially useful when:
 * - You want to catch any exception thrown by your application or framework
 * - You're building a reusable component and want to ensure a unified exception hierarchy
 * - You are using PSR-14 or event-driven error handling
 *
 * Example usage:
 * ```php
 * try {
 *     $router->dispatch();
 * } catch (\Rudra\Exceptions\ExceptionInterface $e) {
 *     // Handle any Rudra-related exception uniformly
 * }
 * ```
 * ---------------------
 * Маркерный интерфейс, используемый для группировки всех пользовательских исключений в фреймворке Rudra.
 *
 * Этот пустой интерфейс служит общей точкой отсчёта для группировки и фильтрации исключений,
 * что упрощает их обработку и идентификацию в проекте.
 *
 * Он особенно полезен при:
 * - Необходимости ловить любые исключения, брошенные приложением или фреймворком
 * - Создании переиспользуемых компонентов с единой иерархией исключений
 * - Работе с событийной моделью ошибок (например, PSR-14)
 *
 * Пример использования:
 * ```php
 * try {
 *     $router->dispatch();
 * } catch (\Rudra\Exceptions\ExceptionInterface $e) {
 *     // Единым образом обрабатываем все исключения из Rudra
 * }
 * ```
 */
interface ExceptionInterface
{
    // Пустой интерфейс — используется только как маркер для пользовательских исключений
}
