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
 * Custom exception class for handling "Not Found" errors.
 * This exception is typically thrown when a requested resource, service, or data is not found.
 * -------------------------
 * Пользовательский класс исключения для обработки ошибок "Не найдено".
 * Это исключение обычно выбрасывается, когда запрашиваемый ресурс, сервис или данные не найдены.
 */
class NotFoundException extends RudraException {}