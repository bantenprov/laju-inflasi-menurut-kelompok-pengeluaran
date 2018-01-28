<?php namespace Bantenprov\LajuInflasiPengeluaran\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The LajuInflasiPengeluaran facade.
 *
 * @package Bantenprov\LajuInflasiPengeluaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LajuInflasiPengeluaran extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laju-inflasi-pengeluaran';
    }
}
