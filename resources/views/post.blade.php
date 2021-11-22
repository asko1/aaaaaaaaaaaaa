@extends('layout')
@section('title', $post->title)
@section('content')
    <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
    <div class="card mt-3">
        @if($post->images->count() > 1)
            @include('partials.carousel', ['images' => $post->images, 'id' => $post->id])
        @elseif($post->images->count() == 1)
            <img src="{{$post->images->first()->path}}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{!! $post->displayBody !!}</p>
        </div>
    </div>
    <h4>Comments</h4>
    <a class="btn btn-primary" href="{{ route('comment', ['post'=> $post->id]) }}">New Comment</a>
    @foreach($post->comments as $comment)
        <div class="card mt-3">
            <div class="card-body">
                <h6>{{ $comment->user->name }}</h6>
                <p>{{ $comment->displayBody }}</p>
            </div>
        </div>
    @endforeach
@endsection
