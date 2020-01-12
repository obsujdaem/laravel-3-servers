<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class AddPostMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        DB::purge('dop_servachek');

        if ($request->user_id === '1') {
            Config::set('database.connections.dop_servachek.host', 'mysql1');
        } elseif ($request->user_id === '2') {
            Config::set('database.connections.dop_servachek.host', 'mysql2');
        } else {
            die('Error with condition middleware');
    }

        return $next($request);
    }
}
