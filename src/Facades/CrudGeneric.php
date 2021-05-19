<?php

namespace JeffAlmeida\CrudGeneric\Facades;

use Illuminate\Support\Facades\Facade;

class CrudGeneric extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'crud-generic';
    }
}
