<?php namespace Bantenprov\RasioGMSmpMts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RasioGMSmpMts facade.
 *
 * @package Bantenprov\RasioGMSmpMts
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmpMts extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rasio-guru-murid-smp-mts';
    }
}
