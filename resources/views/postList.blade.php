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
              <h5 class="card-title">{{$post['title']}}</h5>
            <p class="card-text">{{$post["body"]}}}</p>
              <a href="#" class="btn btn-primary">Edit</a>
            </div>
          </div>    
    @endforeach
</div>
@endsection