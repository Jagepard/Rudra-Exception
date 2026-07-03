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

use RuntimeException;

/**
 * Base exception class for all exceptions thrown by the Rudra framework.
 * This class serves as the root of the exception hierarchy and implements ExceptionInterface.
 */
class RudraException extends RuntimeException implements ExceptionInterface 
{
}
