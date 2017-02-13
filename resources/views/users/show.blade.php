@extends('layout')

@section('content')

<h2>Author's name: {{ $user->name }} </h2>
<h2>Author's email:{{ $user->email }} </h2>

@stop