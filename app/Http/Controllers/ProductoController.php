<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * esta es la clase producto controller
 * @version 1.0
 */
class ProductoController extends Controller
{
    /**
     * PHPDOC
     * Esta es la funcion lista y lista los productos agregados
     * @copyright jorge
     * @version 1.0 2023-09-08 foofgofgogf
     */
    public function listar()
    {
        $productos = [ // $productos
            ['id' => 1, 'nombre' => 'cocacola', 'cantidad' => 3, 'precio' => 1500],
            ['id' => 2, 'nombre' => 'fanta', 'cantidad' => 2, 'precio' => 1500],
            ['id' => 3, 'nombre' => 'sprite', 'cantidad' => 5, 'precio' => 1500],
        ];
        $total = 0;
        foreach ($productos as $producto) {
            $total = $total + $producto['cantidad'] * $producto['precio'];
        }

        return view("tercero", [
            'productos' => $productos, 'total' => $total
        ]);
    }

    /**
     * esta es la funcion
     * @param mixed $arg1 entrega valores
     * @param mixed $arg2 entrega valores
     * 
     * @return [type] regresa nada
     * @version 1.0 no tocar.
     * @deprecated
     * @todo falta implementar
     */
    public function funcion2($arg1,$arg2) 
    {

    }
}
