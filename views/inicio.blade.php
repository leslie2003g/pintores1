@extends('layouts.master')
@section('title', 'Inicio')
@section('header') 
            <br>
            <img class="centro1" src="images/Sticker.jpg" alt="Upss! La imagen lo carga :)" align=right>
            <center><h1>Mis pintores favoritos</h1></center>
            <br>
    @parent
@stop
@section('contenido')
    <img class="img1" src="images/fondoi.jpg" alt="Upss! La imagen lo carga :)">
    <br>
 @parent
@stop
@section('footer')
    <br>
    @parent
@stop
