<?php

namespace App\Http\Middleware;

use Closure;
use WbPHPLibraryPackage\Service\System;

class CheckSystem
{
    /**
     * Handle an incoming request.
     * 检测系统类型
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $host = $request->getHost();
        if (System::isMobile()) {
            if (strpos($host, 'www.test.com') !== false) {
                return redirect()->route('mobile');
            }
        } else {
            if (strpos($host, 'm.test.com') !== false) {
                return redirect()->route('pc');
            }
        }
        return $next($request);
    }
}
