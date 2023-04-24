<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class CacheManage
{

    private $till;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$till=null): Response
    {
        $this->till = $till ?? Carbon::now()->addDay();  // default value not a passed so i did put Carbon::now()->addDay()

        if (Cache::has($this->cacheKey($request))) {

            return response(Cache::get($this->cacheKey($request)));

        }

        // dump($request->fullUrl());

        return $next($request);
    }

    /**
     * Handle tasks after the response has been sent to the browser.
     */


    public function terminate(Request $request, Response $response): void
    {
        if (Cache::has($this->cacheKey($request))) {
            return;
        }

        $contents = $response->getContent();
        Cache::put($this->cacheKey($request), $contents, $this->till);
    }

    private function cacheKey($request)
    {
        $id = '1';
        return md5($request->fullurl() . '-' . $id);
    }




}
