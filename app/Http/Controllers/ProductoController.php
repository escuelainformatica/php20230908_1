<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function listar() {
        $productos=[ // $productos
            ['id'=>1,'nombre'=>'cocacola','cantidad'=>3,'precio'=>1500],
            ['id'=>2,'nombre'=>'fanta','cantidad'=>2,'precio'=>1500],
            ['id'=>3,'nombre'=>'sprite','cantidad'=>5,'precio'=>1500],
        ];
        $total=0;
        foreach($productos as $producto) {
            $total=$total+$producto['cantidad']*$producto['precio'];
        }
   
        return view("tercero",[
            'productos'=>$productos
            ,'total'=>$total
        ]);
    }
}
