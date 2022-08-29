<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao.' - '.$perfil.'<br>';

        if($metodo_autenticacao == 'padrao'){
            echo 'Verificar o usuário e senha no banco de dados<br>';
        }

        if($metodo_autenticacao == 'ldap'){
            echo 'Verificar o usuário e senha no AD<br>';
        }

        if($perfil == 'visitante'){
            echo 'Exibir apenas alguns recursos';
        } else {
            echo 'Carregar o perfil do banco de dados';
        }

        if(true){
            return $next($request);
        } else {
            return response('Acesso negado! Rota exige autenticação!!');
        }
    }
}
