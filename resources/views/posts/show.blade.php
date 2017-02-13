@extends('layouts.app')

@section('content')

<h2>{{ $post->title }} </h2>
<div class="cp" role="listbox">
    <div class="item">
      <img src="http://placehold.it/1140x500/777/555" alt="Image" />
    </div>
 </div>
 <div class="bs aqc">
 <p class="cx">{{$post->body}}</p>
 </div>

@stop