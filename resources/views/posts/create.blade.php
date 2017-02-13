@extends('layouts/app')

@section('content')

<h2>New Post</h2>
<form method="POST" action="{{ url('users/'.$user->id.'/posts') }}">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="el">
    <label for="user">Author</label>
		<select class="custom-select form-control" name="user" type="user" id="user" placeholder="user's name">
  		<option>Default</option>
  		@foreach ($users as $user)
  		<option value="{{ $user->id }}" >{{$user->username}}</option>
  		@endforeach
		</select>
 </div>
  
  <div class="el">
    <label for="title">Title</label>
    <input type="title" class="form-control" name="title" id="title" placeholder="Enter title" />
  </div>

  <div class="el">
    <label for="uri">Uri</label>
    <input type="uri" class="form-control" name="uri" id="uri" placeholder="Enter uri" />
  </div>

  <div class="el">
    <label for="tags">Tags</label>
    <input type="tags" class="form-control" name="tags" id="tags" placeholder="Enter several tags, separate with comma" value="{{ old('tags')}}" />
  </div>

   <div class="el">
    <label for="summary">Summary</label>
    <textarea type="summary" class="form-control" name="summary" id="summary" placeholder="Summary">
    </textarea>
  </div>

   <div class="el">
    <label for="body">Body</label>
    <textarea type="body" class="form-control" id="body" name="body" placeholder="body">{{ old('body')}}
    </textarea>
  </div>
   
  <button type="submit" class="ce fn fh">Save</button> 
</form>

  @if (count($errors))
    <ul>
      @foreach($errors->all() as $error)
      <li> {{ $error}}</li>
      @endforeach
    </ul>
   @endif

@stop