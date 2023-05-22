<?php
use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Produto;
use App\Models\Usuario;
use Firebase\JWT\JWT;

//rota para geração de token de autenticacao
$app->post('/api/token', function($request, $response){
    $dados = $request->getParsedBody();//pega os dados do form
    $email = $dados['email'] ?? null;//se estiver vazio, recebe null
    $senha = $dados['senha'] ?? null;//atribui o valor recuperado a uma variavel

    $usuario = Usuario::where('email', $email)->first();

    if(!is_null($usuario) && (md5($senha)===$usuario->senha)){//a senha foi criptografada usando md5
        //gerar token
        $secretKey = $this->get('settings')['secretKey'];
        $acesso = JWT::encode([$usuario], $secretKey, 'HS256');
        return $response->withJson(['chave' => $acesso]);
    }
    return $response->withJson(['status' => 'erro']);
});