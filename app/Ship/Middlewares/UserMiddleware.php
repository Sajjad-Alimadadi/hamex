<?php

namespace App\Ship\Middlewares;

use Apiato\Core\Middlewares\Http\Authenticate as CoreMiddleware;
use Closure;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware extends CoreMiddleware
{
    #[NoReturn] public function handle($request, Closure $next, ...$guards)
    {
        $id = session('user');
        if (is_null($id)) {
//            return response('Unauthorized Access', Response::HTTP_FORBIDDEN);
//            abort(Response::HTTP_FORBIDDEN);
            return redirect('/mobile');
        }
        return $next($request);
    }
}
