@extends('layouts.app')

@section('content')

<div class="fu">
  
  @foreach ($posts as $post)
  <div class="gq gj">
      <div class="co">
        <img data-src="holder.js/100%x200" alt="100%x200" src="" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;" />
		    <div class="pj">
	          <h3 id="thumbnail-label"><a class="apz" href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
	      </div> 
      </div>
  </div>
  @endforeach
</div>
@stop