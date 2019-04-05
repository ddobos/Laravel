@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="card">
        <a href="{{ route('posts.show', ['id'=>$post['id']])}}">
            <div class="card-header">
              {{$post['title']}}
            </div>
        </a>
            <div class="card-body">
              <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text">{{ $post["body"] }}</p>
            @if(Auth::check() && Auth::user()->id == $post['user_id']))
              <a href="{{ route('posts.edit', ['id'=>$post['id']])}}" class="btn btn-primary">Edit</a>
              <form action="{{ route('posts.destroy', ['id'=>$post['id']])}}" method="POST" >
                @method("DELETE")
                @csrf
              <button type="submit" class="btn btn-danger">Delete</a>
            </form>
            @endif
            </div>
          </div>    
    @endforeach
</div>
@endsection