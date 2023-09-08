<h1>Este es el segundo archivo</h1>
la variable variable1 tiene el valor: <b>{{$variable1}}</b><br>
la variable variable1 tiene el valor textual: <b>{!! $variable1 !!}</b><br>
la variable malicioso es:{{$malicioso}}<br>
la lista de paises es:@dump($paises)<br>
<hr>
@foreach($paises as $pais)
    {{$pais}}<br>
@endforeach