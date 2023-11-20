<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Peran;
use App\Models\Pengguna;

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        // dd($role);
        $penggunaPeran = Auth::guard('web')->user()->peran;

        if (Auth::guard('web')->check() && $penggunaPeran && $penggunaPeran->nama == $role) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
}
