<?php

namespace Suzdalenko\Task06;
/*
The class that collects the requests Rest
*/
class Operaciones{
    private $producto;
    private $tienda;
    public function __construct(){
        $this->producto = new Producto();
        $this->tienda   = new Tienda();
    }
    public function routing($request, $first, $second, $third){ 

        if ($request == 'GET' AND $first == 'productos' AND $second == 'stock' AND $third){
            /* GET /productos/stock/{producto} */
            $out = $this->producto->getStockById($third);

        } else if ($request == 'GET' AND $first == 'productos' AND $second) {        
            /* GET /productos/{codigo} */ 
            $out = $this->producto->getByCode($second);
        
        } else if ($request == 'POST' AND $first == 'tiendas'){
            /* POST /tiendas/ */
            $out = $this->tienda->createShop();
        
        } else if ($request == 'DELETE' AND $first == 'tiendas' AND $second) {
            /* DELETE /tiendas/{id} */
            $out = $this->tienda->deleteById($second);

        } else {
            $this->not_found($first, $second, $third, $request);
        }
        $this->return_response($out);
    }
    public function not_found($request, $first, $second, $third){
        header("HTTP/1.1 404 Not Found");
        $first = $first   ?? "undefined";
        $second = $second ?? "undefined";
        $third = $third   ?? "undefined";
        die("Not found method: {$request} {$first}/{$second}/{$third}");
    }

    public function return_response($out){
        echo '<pre>';
        print_r($out);
        echo '</pre>';
        echo '--- Response End --- <br><br><br><br>';
    }
}