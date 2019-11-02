

{{$Modo == 'crear' ? 'Agregar empleado' : 'Modificar empleado'}} 


<div class="form-group"> 
<label for="nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" name="nombre" id="nombre" value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}">
{!! $errors->first('nombre','<div class="invalid-feedback">:message</div>')!!}
</div>




<div class="form-group"> 

<label for="papellido" class="control-label">{{'Primer Apellido'}}</label>
<input  type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}} "   name="papellido" id="papellido" value="{{isset($empleado->papellido)?$empleado->papellido:old ('papellido')}}">
{!! $errors->first('papellido','<div class="invalid-feedback">:message</div>')!!}
</div>


<div class="form-group"> 
<label for="sapellido" class="control-label">{{'Segundo Apellido'}}</label>
<input type="text" class="form-control {{$errors->has('sapellido')?'is-invalid':''}}"  name="sapellido" id="sapellido" value="{{isset($empleado->sapellido)?$empleado->sapellido:old('sapellido')}}">
{!! $errors->first('sapellido','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group"> 

<label for="correo" class="control-label" >{{'Correo Electronico'}}</label>
<input type="email"  class="form-control  {{$errors->has('correo')?'is-invalid':''}} " name="correo" id="correo" value="{{isset($empleado->sapellido)?$empleado->sapellido:old('correo')}}">
{!! $errors->first('correo','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group"> 

<label for="foto" class="control-label" >{{'Foto'}}</label>
@if(isset($empleado->foto))
<br>
<img class= "img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto}}" alt="" width="200">
@endif

<input class="form-control  {{$errors->has('foto')?'is-invalid':''}}" type="file" name="foto" id="foto" value="">
{!! $errors->first('foto','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" class="btn btn-success" value="{{$Modo == 'crear' ? 'Agregar' : 'Modificar'}}
"> 

<a class="btn btn-primary" href="{{url ('empleados')}}">Regresar</a>