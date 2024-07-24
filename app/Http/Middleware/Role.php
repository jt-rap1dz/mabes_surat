<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // ditambahakan use Auth

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    { // penambahan $roles
        if(!Auth::check()){
            // jika dia tidak memiliki user atau akses maka diarahkan ke abort 403
            abort(403, 'Belum mempunyai account');
        }
        $roles = explode('|', $roles);
        // explode digunakan untuk mengubah data dari string menjadi array
        // string mana yang diubah ? yaitu admin dan personel
        $user = Auth::user();
        // setelah sudah menjadi array maka user dicek apakah sudah terregister 
        // atau Belum
        // jika sudah maka panggil dengan cara looping sesuai rolenya
        foreach($roles as $role){
        // setelah di looping, jika rolenya termasuk yang dideklarasikan
        // pada route web.php maka lanjutkan untuk ditampilkan, jika bukan maka
        // arahkan ke halamam depan    
            if($user->role($role)){
                return $next($request);
            }
        }
        return redirect('/');
    }
}
