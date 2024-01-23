<?php
namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser {
    /**
    * Handle an incoming request.
    *
    * @param  \Closure( \Illuminate\Http\Request ): ( \Symfony\Component\HttpFoundation\Response )  $next
    */

    public function handle( Request $request, Closure $next ): Response {

        $data = [ 100, 101, 102 ];
        // dd( $request->uid );

        // if ( $request->uid && $request->uid != 101 )
        if ( $request->uid && !in_array( $request->uid, $data ) ) {
            return redirect( 'noaccess' );
        }

        return $next( $request );
    }
}
