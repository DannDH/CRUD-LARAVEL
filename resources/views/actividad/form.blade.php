<h1> {{ $modo }} Actividad </h1>
<br>
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($actividades->Nombre)?$actividades->Nombre:'' }}" id="Nombre">
<br>

<label for="Actividad"> Actividad </label>
<input type="text" name="Actividad" value="{{ isset($actividades->Actividad)?$actividades->Actividad:'' }}" id="Actividad">
<br>

<label for="Texto"> Texto </label>
<input type="text" name="Texto" value="{{ isset($actividades->Texto)?$actividades->Texto:'' }}" id="Texto">
<br>

<input type="submit" value="{{$modo}} datos"> 

<a href=" {{ url('actividad/')}} "> Regresar