<?php

namespace App\Http\Middleware;

use Closure;
use phpDocumentor\Reflection\Types\Boolean;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {

        if (!$this->roles($role)) {

            abort('500');
        }
        return $next($request);
    }

    private function roles($roles)
    {
        switch ($roles) {
            case 'admin':
                return true;
            break;
            case 'manager':
                return true;
            break;
        }
        return false;
    }
}
