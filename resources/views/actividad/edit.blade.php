@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('/actividad/'.$actividades->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('actividad.form',['modo'=>'Editar'])
    </form>
</div>
@endsection