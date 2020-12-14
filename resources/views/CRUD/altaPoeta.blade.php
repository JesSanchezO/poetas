@extends('layouts.master')

@if(isset($poet) and is_object($poet))
@php 
   $title='Modificación de un Poeta';
   $boton = 'Actualizar';
   $id = $poet->poet_code;
   $first_name = $poet -> first_name;
    $surname = $poet -> surname;
    $address = $poet -> address;
    $postcode = $poet -> postcode;
    $telephone_number = $poet -> telephone_number;
 @endphp
@else
@php 
$title='Alta de un Poeta';
   $boton = 'Dar de Alta';
   $id = '';
   $first_name = '';
    $surname = '';
    $address = '';
    $postcode = '';
    $telephone_number = '';
 @endphp
@endif

@section('title', 'Mostrar usuarios')
@section('header')
 <h1>@parent {{$title}}</h1>
 
@stop
@section('navbar')
<h2>MENÚ DE NAVEGACIÓN:</h2> 
<ul>
    <li><a href="#p1">¿Qué es la Alta Sensibilidad?</a></li>
    <li><a href="#p2">PAS Características de la Alta Sensibilidad (Según Elaine Aron)</a></li>
    <li><a href="#p3">Otras características de la Alta Sensibilidad</a></li>
    <li><a href="#p4">¿Cómo actuar ante una persona altamente sensible?</a></li>
    <li><a href="#p5">La otra realidad de las Personas Altamente Sensibles</a></li>
</ul>
@stop
@section('content')

<form action="{{isset($poet) ? action('CRUD@update') :action('CRUD@store')}}" method="POST">
        {{csrf_field()}}
        @if(isset($poet) and is_object($poet))
        <input type="hidden" name="id" value="{{$id}}">
        @endif
        <label for="first_name">Nombre</label>
        <input type="text" name="first_name" value="{{$first_name}}">
        <br>
        <label for="surname">Apellido</label>
        <input type="text" name="surname" value="{{$surname}}">
        <br>
        <label for="address">Dirección</label>
        <input type="text" name="address" value="{{$address}}">
        <br>
        <label for="postcode">Codigo Postal</label>
        <input type="text" name="postcode" value="{{$postcode}}">
        <br>
        <label for="telephone_number">Número de teléfono</label>
        <input type="text" name="telephone_number" value="{{$telephone_number}}">
        <br>
        <input type="submit" value="{{$boton}}" >
    </form>


@stop
@section('footer')
DERECHOS RESERVADOS <br>
Jessica Guadalupe Sánchez Olivas 5E
@stop