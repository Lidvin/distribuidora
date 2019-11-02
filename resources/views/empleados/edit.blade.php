@extends('layouts.app')
@section('content')
<div class="container" >

@if(Session:: has('Mensaje')){{
Session::get('Mensaje')

}}
@endif

<form action="{{url ('/empleados/' . $empleado->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH')}}
@include('empleados.form', ['Modo'=> 'editar'])


</form>

</div>
@endsection

