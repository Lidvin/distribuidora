@extends('layouts.app')
@section('content')

<div class="container" >

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>
    @foreach($errors->all() as $error)

    <li>{{$error}}</li>
    @endforeach
</ul>  

</div>
 @endif



 <?php

//esta libreria se puede descargar de http://sourceforge.net/projects/nusoap/
include("../cambio/general.php");

?>

<br>

<a class="btn btn-primary" href="{{url ('empleados')}}">Regresar</a>

@endsection