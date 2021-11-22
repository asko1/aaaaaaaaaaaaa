@extends('layout')
@section('title', $post->title)
@section('content')
    <a href="{{url()->previous()}}" class="btn btn-primary mb-3">Back</a>
    <form action="{{route('comment.store', ['post'=> $post->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @error('body')
        @foreach($errors->get('body') as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        @enderror
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="3" name="body" required>{{old('body')}}</textarea>
        </div>

        <input class="btn btn-primary" type="submit">
    </form>
@endsection
