<?php

/*
 * This file is part of Laravel Basket.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Laravel\Basket\Facades;

use Illuminate\Support\Facades\Facade;

class Basket extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'basket';
    }
}
