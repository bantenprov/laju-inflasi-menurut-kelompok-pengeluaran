<?php namespace Bantenprov\LajuInflasiPengeluaran\Http\Middleware;

use Closure;

/**
 * The LajuInflasiPengeluaranMiddleware class.
 *
 * @package Bantenprov\LajuInflasiPengeluaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LajuInflasiPengeluaranMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
