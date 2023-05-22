<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);
$app->add(new Tuupola\Middleware\JwtAuthentication([
    "header" => "Authorization",
    "regexp" => "/(.*)/",
    "path" => "/api", /* or ["/api", "/admin"] */
    "ignore" => ["/api/token", "/admin/ping"],
    "secret" => $container->get('settings')['secretKey']
]));

$app->add(function ($req, $res, $next) {//envio dos cabeçalhos
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')//quais sites podem acessar a api
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});