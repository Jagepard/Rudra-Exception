<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru">
 * @license https://mit-license.org/ MIT
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