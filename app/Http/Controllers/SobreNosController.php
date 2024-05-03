<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller
{
    protected static function middleware() {
        return [
            'log.acesso',
        ];
    }

    public function sobrenos() {
        return view('site.sobre-nos');
    }
}
