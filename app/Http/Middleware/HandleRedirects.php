<?php

namespace App\Http\Middleware;

use App\Models\Redirect;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HandleRedirects
{
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();

        // Check cache first (performance optimization)
        $redirect = Cache::remember(
            "redirect:{$path}",
            3600,
            fn () => Redirect::where('from_path', $path)
                ->where('is_active', true)
                ->first()
        );

        if ($redirect) {
            $redirect->increment('hits');
            $redirect->update(['last_hit_at' => now()]);

            return redirect($redirect->to_path, $redirect->status_code);
        }

        return $next($request);
    }
}
