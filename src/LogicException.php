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
 */
class LogicException extends RudraException implements ExceptionInterface 
{
}
