<?php

declare(strict_types = 1);

/**
 * Date: 30.03.17
 * Time: 14:19
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace App;

/**
 * Class Config
 *
 * @package stub
 */
class Config
{

    /**
     * Базовое пространство имен
     */
    const DEFAULT_NAMESPACE = 'App\Http\Controllers\\';

    const HTTP_ERRORS = [
        '404' => ['App\Http\BaseController', 'error404'],
        '503' => ['App\Http\BaseController', 'error503'],
    ];
}
