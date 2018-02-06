<?php namespace Bantenprov\RasioGMSmpMts\Http\Middleware;

use Closure;

/**
 * The RasioGMSmpMtsMiddleware class.
 *
 * @package Bantenprov\RasioGMSmpMts
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmpMtsMiddleware
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
