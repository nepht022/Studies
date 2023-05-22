<?php

use Illuminate\Container\Container;
use \Psr\Http\Message\ServerRequestInterface as request;
use \Psr\Http\Message\ResponseInterface as response;//feito automaticamente pelo framework slim
use Illuminate\Database\Capsule\Manager as Capsule;

    require 'vendor/autoload.php';

    $app = new \Slim\App(
        ['settings' => [
            'displayErrorDetails' => true
        ]]
    );


    //Cada $app->get é uma requisição feita na url do navegador
    //uma mesma url nao pode ser usada mais de uma vez
    
    $app->get('/postagens1[/{mes}[/{ano}]]', function($request, $response){
        $mes = $request->getAttribute('mes') ? $request->getAttribute('mes') : date('M');
        $ano = $request->getAttribute('ano') ? $request->getAttribute('ano') : date('Y');
        echo 'Postagens de '.$mes.' de '.$ano;
    });

    //colchetes torna opcional
    $app->get('/usuarios1[/{id}]', function($request, $response){
        $id = $request->getAttribute('id')!=null ? $request->getAttribute('id') : 'ID Nao Adicionado';
        echo 'Usuario ID: '.$id;
    });

    //.* é para qualquer tipo, string, numero etc
    $app->get('/lista[/{itens:.*}]', function($request, $response){
        $itens = $request->getAttribute('itens');
        echo '<pre>';
        var_dump(explode('/', $itens));
        echo '</pre>';
    });

    $app->get('/blog/postagens/{id}', function(){
        echo 'Listar postagem para ID';
    })->setName('blog');//nome abreviado para a rota

    $app->get('/meusite', function(){
        $retorno = $this->get("router")->pathFor("blog", ["id" => "5"]);
        echo $retorno;
    });

    //agrupamento de rotas
    $app->group('/v1', function(){
        $this->get('/usuarios', function(){
            echo 'usuarios v1';
        });
        $this->get('/postagens', function(){
            echo 'postagens v1';
        });
    });



    $app->get('/postagens2', function(request $request, response $response){//select
        $response->getBody()->write('Seila');
        return $response;
    });
    $app->post('/usuarios/adicionar', function(request $request, response $response){//insert
        $post = $request->getParsedBody();//recuperando os dados do form simulado
        $nome = $post['Nome'];//definindo variaveis para receber os dados recuperados
        $email = $post['Email'];
        
        return $response->getBody()->write($nome.' - '.$email);//escrevendo as variaveis no body da aplicacao
    });
    $app->put('/usuarios/atualizar', function(request $request, response $response){//update
        $post = $request->getParsedBody();//recuperando os dados do form simulado
        $id = $post['Id'];
        
        return $response->getBody()->write('Sucesso ao atualizar o usuario de ID '.$id);
    });
    $app->delete('/usuarios/remover/{id}', function(request $request, response $response){//delete
        $id = $request->getAttribute('id');

        return $response->getBody()->write('Sucesso ao deletar o usuario de ID '.$id);

    });



    class Servico{}
    //dependency injection
    $container = $app->getContainer();//recupera o container do framewok slim que utiliza pimple
    $container['servico'] = function(){//nomeia o container que retorna uma instancia de classe
        return new Servico;
    };
    $app->get('/servico', function(request $request, response $response){
        $servico = $this->get('servico');//recupera o container
        var_dump($servico);
    });


    $container = $app->getContainer();//recupera o container do framewok slim que utiliza pimple
    $container['view'] = function(){//nomeia o container que retorna uma instancia de classe
        return new MyApp\controllers\View;
    };
    //controller como serviço 
    $app->get('/usuario', '\MyApp\controllers\Home:home');//diretorio da classe:metodo
    //uma rota que aponta para uma classe


    $app->get('/header', function(request $request, response $response){
        $response->getBody()->write('Cabeçalho');//retornando um texto
        return $response->withHeader('allow', 'PUT')->withAddedHeader('Content-Length', 3);//retornando informações de cabeçalho
    });
    $app->get('/json', function(request $request, response $response){
        return $response->withJson(["Nome"=>"Rodrigo", "Email"=>"Rodrigo@gmail.com"]);//retornando Json
        //aparece que da erro mas funciona, porem essa é a escrita do slim 3 e nao do slim 4
    });
    $app->get('/xml', function(request $request, response $response){
        $xml = file_get_contents('arquivo.xml');
        $response->getBody()->write($xml);//retornando xml que na verdade é html
        return $response->withHeader('Content-Type', 'application/xml');//definindo o tipo do cabeçalho de html para xml
    });


    //middleware //camada de execução de codigo antes da execução do arquivo
    /*$app->add(function($request, $response, $next){//middleware 1
        $response->getBody()->write('Inicio da Camada 1 + ');
        $response = $next($request, $response);
        $response->getBody()->write(' + Fim da Camada 1');
        return $response;
    });
    $app->add(function($request, $response, $next){//middleware 2
        $response->getBody()->write('Inicio da Camada 2 + ');
        return $next($request, $response);
    });
    */
    $app->get('/usuarios2', function(request $request, response $response){
        $response->getBody()->write('Ação Principal usuarios');
    });
    $app->get('/postagens3', function(request $request, response $response){
        $response->getBody()->write('Ação Principal postagens');
    });

    $container = $app->getContainer();
    $container['db'] = function(){
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'slim',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $capsule->setAsGlobal();//deixar global
        $capsule->bootEloquent();//fazer comunicação com o bd

        return $capsule;
    };
    $app->get('/usuarios3', function(request $request, response $response){
        $db = $this->get('db')->schema();//acessa a instancia de container db
        //criando a tabela
        $db->dropIfExists('usuarios');
        $db->create('usuarios', function($table){
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->timestamps();
        });

        //inserindo registros
        $db->table('usuarios')->insert([
            "nome" => "Rodrigo Freire",
            "email" => "rodrigo@gmail.com"
        ]);
        //atualizando registros
        $db->table('usuarios')->where('id', 2)->update([
            "nome" => "Marcela Finam",
            "email" => "finamMarcela@hotmail.com"
        ]);

        //deletando registros
        $db->table('usuarios')->where('id', 2)->delete();

        //listando registros
        $usuarios = $db->table('usuarios')->get();
        foreach($usuarios as $val){
            echo $val->nome.'<br>';
        }
    });

    $app->run();
?>