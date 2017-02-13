@extends('layout')

@section('content')

<h2>Authors</h2>
<ul>
@foreach ($users as $user)
<li> <a href="/users/{{$user->id}}">{{$user->name}}</a></li>
@endforeach
</ul>

@stop