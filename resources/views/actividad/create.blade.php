@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{ url('/actividad') }}" method='post'>
    @csrf
    @include('actividad.form',['modo'=>'Crear'])
    </form> 
</div>
@endsection