

@extends('layouts.app')
@section('content')
<div class="container" >

@if(Session:: has('Mensaje'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje')}}

</div>

@endif

<a href="{{url ('empleados/create')}}" class="btn btn-success" > Agregar Empleado</a>
<br>
<br>

@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


<table class="table table-light table-hover" >
    <thead class="thead-light">
        <tr>
        <th>#</th>
            <th>Foto</th>
            <th>Nombres y Apellidos</th>
          
            <th>Correo </th>
            <th>Acciones</th>
      
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
        <td>{{$empleado->id}}</td>
        <td>
        <img src="{{ asset('storage').'/'.$empleado->foto}}" class="img-thumbnail img-fluid" alt="" width="100">    
        </td>
       
        <td>{{$empleado->nombre}} {{$empleado->papellido}} {{$empleado->sapellido}}</td>
       
        <td>{{$empleado->correo}}</td>

     <td> <a  class= "btn btn-warning"  href="{{url('/empleados/'.$empleado->id.'/edit')}}">Editar</a>
     <form action="{{ url ('/empleados/'.$empleado->id)}}" method="post" style="display:inline">
    
     {{csrf_field()}}
    {{method_field('DELETE')}}
    <button  class= "btn btn-danger" type="submit" onclick="return confirm('Borrar?');" > Borrar </button>

    </form></td>
       
        </tr>

        @endforeach
    </tbody>
</table>
{{$empleados->links()}}
</div>
@endsection