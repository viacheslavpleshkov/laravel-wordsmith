<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $actions = $request->route()->getAction();
        $user = $request->user()->role->name;
        if (in_array($user, $actions['block'])) {
            Auth::logout();
            return redirect()->route('login')->with('success', __('admin.block-success'));
        } else {
            if (in_array($user, $actions['roles'])) {
                return $next($request);
            }
        }
        return abort(401);
    }
}