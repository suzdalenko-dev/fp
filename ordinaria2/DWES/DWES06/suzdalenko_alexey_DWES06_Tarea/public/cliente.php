<?php
require '../vendor/autoload.php';
use GuzzleHttp\Client;

try {
    $client = new Client(['base_uri' => 'http://localhost/']);
   
    
    $url_get  = 'servicios/unidad06/productos/P004';
    echo "Testing GET /productos/{codigo} <br><br>";
    $response = $client->request('GET', $url_get);
    echo "--- Response Start --- <br>";
    echo "HTTP Status Code: " . $response->getStatusCode() . "<br>";
    echo $response->getBody();


    $url_get  = 'servicios/unidad06/productos/stock/1';
    echo "Testing GET /productos/stock/{producto_id} <br><br>";
    $response = $client->request('GET', $url_get);
    echo "--- Response Start --- <br>";
    echo "HTTP Status Code: " . $response->getStatusCode() . "<br>";
    echo $response->getBody();


    $url_post = 'servicios/unidad06/tiendas/';
    $store_data = ['nombre' => 'Sucursal99', 'telefono' => '942344988'];
    echo "Testing POST /tiendas <br><br>";
    echo "--- Response Start --- <br>";
    $response = $client->request('POST', $url_post, ['json' => $store_data]);
    echo "HTTP Status Code: " . $response->getStatusCode() . "<br>";
    echo $response->getBody();
    

    $delete_url = 'servicios/unidad06/tiendas/72';
    echo "Testing DELETE /tiendas/{tienda_id} <br><br>";
    echo "--- Response Start --- <br>";
    $response = $client->request('DELETE', $delete_url);
    echo "HTTP Status Code: " . $response->getStatusCode() . "<br>";
    echo $response->getBody();


} catch (\Exception $e) {
    echo '<pre>';
    print_r($e->getMessage());
    echo '<pre>';
}