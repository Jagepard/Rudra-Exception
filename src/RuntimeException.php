<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru">
 * @license https://mit-license.org/ MIT
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
