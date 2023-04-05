@extends('layouts.app')
@section( 'content')

    <div class="row">
        <div class="col">
            <div class="pull-left">
                <h2> Show Post</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $post->id }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Title</strong>
                {{ $post->title }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Body:</strong>
                {{ $post->body }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Updated:</strong>
                {{ $post->updated_at }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <strong>Created:</strong>
                {{ $post->created_at }}
            </div>
        </div>
    </div>


@endsection