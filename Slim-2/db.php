<?php

use Illuminate\Support\Facades\Schema;

if (PHP_SAPI != 'cli') {
    exit('Rodar via linha de comando');
}
require __DIR__ . '/vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/src/dependencies.php';

$db = $container->get('db');
$schema = $db->schema();
$tabela = 'produtos';

$schema->dropIfExists($tabela);
$schema->create($tabela, function($table){
    $table->increments('id');
    $table->string('titulo', 100);
    $table->text('descricao');
    $table->decimal('preco', 11,2);
    $table->string('fabricante', 60);
    $table->timestamps();
});

$db->table($tabela)->insert([
    "titulo" => "Celular j7",
    "descricao" => "Celular embutido com sistema android da nova geração",
    "preco" => 899.99,
    "fabricante" => "Samsumg",
    "created_at" => '2019-10-22',
    "updated_at" => '2019-12-29',
]);
$db->table($tabela)->insert([
    "titulo" => "Celular iphone14",
    "descricao" => "Celular embutido com sistema apple, o mais novo do mercado",
    "preco" => 1999.90,
    "fabricante" => "Apple",
    "created_at" => "2019-08-02",
    "updated_at" => '2019-11-22',
]);




