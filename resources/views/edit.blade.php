@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('posts.update', $post['id']) }}" method="POST">
            @method("PATCH")
            <input name = "title" type="text" class="form-control" value={{ $post['title'] }}></br>
            <textarea name="body" id="" rows="10" class="form-control">{{ $post['body'] }}</textarea><br>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    @csrf
                    <button type="submit" class="col-md-12 btn btn-primary">
                        Update
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection