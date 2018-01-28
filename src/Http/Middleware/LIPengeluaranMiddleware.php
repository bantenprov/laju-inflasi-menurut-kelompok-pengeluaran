<?php namespace Bantenprov\LIPengeluaran\Http\Middleware;

use Closure;

/**
 * The LIPengeluaranMiddleware class.
 *
 * @package Bantenprov\LIPengeluaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LIPengeluaranMiddleware
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
