@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Hola Admin</h1>
@stop

@section('content')

<div class="card"> 
    <div class="card-body">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem incidunt iste harum libero velit deserunt quidem, molestiae magni recusandae odit ipsam eligendi fugit assumenda eos minima, nemo tempore temporibus quasi?</p>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop