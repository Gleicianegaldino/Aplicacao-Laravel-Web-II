@extends('layouts.app')
@section( 'content')

<div class="row">
    <div class="col">
        <div class="pull-left">
            <h2> Edit Post</h2>
        </div>
    </div>
</div>
<form action="{{ route('posts.update',$post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" 
                value="{{ $post->title }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Body:</strong>
                <textarea class="form-control" name="body"> {{ $post->body }}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn col btn-primary"> Update</button>
        </div>
    </div>

</form>




@endsection