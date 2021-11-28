@extends('layouts.app')

@section('content')
    <h1 align="center">Posts</h1>

    @if(count($posts) > 1)
        <ul class="list-group">
            @foreach($posts as $post)
                <div class="list-group-item">
                    <h3>{{$post->title}}</h3>
                    {{$post->description}}
                </div>
            @endforeach
        </ul>
    @else
        <p>No Posts Found</p>
    @endif
@endsection