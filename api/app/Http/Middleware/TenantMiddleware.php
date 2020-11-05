<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class TenantMiddleware
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
        $subdomain = explode(".", $_SERVER['HTTP_HOST'])[0];

        if (isset(config('tenant')[$subdomain])) {
            $tenant = config('tenant')[$subdomain];
            config([
                'database.default' => $tenant['connection'],
                'app.name' => $tenant["app_name"]
            ]);
        } else {
            return abort(404);
        }

        return $next($request);
    }
}
