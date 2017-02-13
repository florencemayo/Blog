@extends('layouts/app')

@section('content')

<h1>Edit the Post</h1>
<form method="POST" action="{{url('/posts/'. $post->id).''}}">{{ method_field('PATCH')}}
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="el">
    <label for="author">Author</label>
	 <input type="username" class="form-control" value="{{$post->user->username}}" name="username" id="username">
 </div>
  
  
  <div class="el">
    <label for="title">Title</label>
    <input type="title" class="form-control" value="{{ $post->title }}" name="title" id="title" />
  </div>

  <div class="el">
    <label for="uri">Uri</label>
    <input type="uri" class="form-control" name="uri" id="uri" value="{{ $post->uri }}" />
  </div>

  <div class="el">
    <label for="tags">Tags</label>
    <input type="tags" class="form-control" name="tags" id="tags" value="{{ $post->tags }}" />
  </div>

   <div class="el">
    <label for="summary">Summary</label>
    <textarea type="summary" class="form-control" value="{{$post->summary}} " name="summary" id="summary">{{ $post->summary }}
    </textarea>
  </div>

   <div class="el">
    <label for="body">Body</label>
    <textarea type="body" class="form-control" value="{{$post->body}}" id="body" name="body">{{ $post->body }}
    </textarea>
  </div>
   
  <button type="submit" class="ce fn fh">Update</button>
</form>
@stop