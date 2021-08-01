<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Task;

class ownersOnlyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $getPathInfo = explode("/",$request->getPathInfo());
        if (isset($getPathInfo[2])) {
            $id = $getPathInfo[2];
            $model = Task::findOrFail($id);

            if ($model->user->id !== auth()->user()->id) {
                return back();
            }
        }
        
        return $next($request);
    }
}
