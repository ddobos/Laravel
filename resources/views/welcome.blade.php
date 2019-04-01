@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form action="{{ route('posts.store') }}" method="POST">
            <input name = "title" type="text" class="form-control"></br>
            <textarea name="body" id="" rows="10" class="form-control"></textarea><br>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    @csrf
                    <button type="submit" class="col-md-12 btn btn-primary">
                        Add
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection