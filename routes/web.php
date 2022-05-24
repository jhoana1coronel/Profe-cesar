<?php
/** aqui creamos las apis */
/** @var \Laravel\Lumen\Routing\Router $router */


/** aqui se ponen las uris, lo que es despues del url */
$router->get('/', function () use ($router) {
    return $router->app->version();
});


/**GET = obtener
 * POST = crear
 * PUT = modificar
 * DELETE = eliminar
 */

$router->get('/Saludo', function(){
    return 'hola mi nombre es jhoana';
});

$router->post('/Saludo', function(){
    return 'Hola estoy creando un saludo';
});

$router->put('/Mod', function(){
    return 'Hola estoy modificando';
});

$router->delete('/del', function(){
    return 'Hola estoy eliminando';
});