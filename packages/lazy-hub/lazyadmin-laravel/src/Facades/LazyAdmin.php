<?php

namespace LazyHub\LazyadminLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class LazyAdmin extends Facade

{

    /**
     * @see \LazyHub\LazyadminLaravel\LazyAdmin
     */
    protected static function getFacadeAccessor(): string
    {
        return 'lazy-admin';
    }
}
