<?php namespace Bantenprov\LIPengeluaran\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The LIPengeluaran facade.
 *
 * @package Bantenprov\LIPengeluaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LIPengeluaran extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'li-pengeluaran';
    }
}
