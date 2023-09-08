<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/segundo', function () {
    //return View::make("segundo");
    return view('segundo',[
        'variable1'=>'esta <h2>hola</h2>' // $variable1='esta es la variable'
        ,'malicioso'=>'<script>alert("hola");</script>'
        ,'paises'=>['Chile','Argentina','Peru','Bolivia']
    ]);
});
Route::get('/tercero',function() {
    $productos=[ // $productos
        ['id'=>1,'nombre'=>'cocacola','cantidad'=>3,'precio'=>1500],
        ['id'=>2,'nombre'=>'fanta','cantidad'=>2,'precio'=>1500],
        ['id'=>3,'nombre'=>'sprite','cantidad'=>5,'precio'=>1500],
    ];
    $total=0;
    foreach($productos as $producto) {
        $total=$total+$producto['cantidad']*$producto['precio'];
    }
    $clavesecreta="eieieidifidfidf";

    return view("tercero",[
        'productos'=>$productos
        ,'total'=>$total
    ]);
});
