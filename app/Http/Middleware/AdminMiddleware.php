<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('Middleware Admin berjalan');
        // Periksa apakah pengguna telah login dan tidak memiliki role 'admin'
        if (Auth::check() && Auth::user()->role !== 'admin') {
            // Redirect ke halaman sebelumnya atau halaman lain jika bukan admin
            return redirect()->back();
        }

        // Lanjutkan ke request berikutnya jika pengguna adalah admin
        return $next($request);
    }
}
