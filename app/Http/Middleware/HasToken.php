<?php

namespace App\Http\Middleware;

use Closure;

class HasToken
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
        if ($request->input('token') != config('app.upload_result_key'))
            abort(403);

        return $next($request);
    }
}
