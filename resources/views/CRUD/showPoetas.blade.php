@extends('layouts.master')
@section('title', $title)
@section('header')
 <h1>POETAS</h1>
@stop
@section('navbar')
<h2>MENÚ DE NAVEGACIÓN:</h2> 

@stop
@section('content')

<div>
  <a href="{{action('CRUD@create')}}">Agregar un nuevo poeta <img src="{{url('/images/agregar.png')}}"></a>
</div>

<table class="table table-striped table-dark">
  <thead>
    <tr>
    <th scope="col">first_name</th>
            <th scope="col">surname</th>
            <th scope="col">address</th>
            <th scope="col">postcode</th>
            <th scope="col">telephone_number</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($poetas as $poet)
    <tr>
    <td>{{$poet->first_name}}</td>
            <td>{{$poet->surname}}</td>
            <td>{{$poet->address}}</td>
            <td>{{$poet->postcode}}</td>
            <td>{{$poet->telephone_number}}</td>
      <td><a href="{{action('CRUD@show',['id'=>$poet->poet_code])}}"><img src="{{url('/images/actualizar.png')}}"></a></td>
      <td><a href="{{action('CRUD@destroy',['id'=>$poet->poet_code])}}"><img src="{{url('/images/eliminar.png')}}"></a></td>
    </tr>
    @endforeach
  
  </tbody>
</table>
<div class="alert alert-danger" role="alert">
{{session('status')}}
</div>


@stop
@section('footer')
DERECHOS RESERVADOS <br>
Jessica Guadalupe Sánchez Olivas 5E
@stop