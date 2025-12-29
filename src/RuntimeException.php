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
 * For errors that occur during execution, and depend on external factors
 * (e.g. file not found, no write permissions, DB error, etc.)
 * -----------------------------------------------------------
 * Для ошибок, возникающих во время выполнения, и зависящих от внешних факторов 
 * (например, файл не найден, нет прав на запись, ошибка БД и т.д.)
 */
class RuntimeException extends RudraException {}
