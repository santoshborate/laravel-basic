<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class Locale
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
        // Check if session have locale if not then get default locale from config
        $language = Session::get('locale', Config::get('app.locale'));

        // Set locale into session
        Session::put('locale', $language);

        // Set locale into app
        App::setLocale($language);

        return $next($request);
    }
}
