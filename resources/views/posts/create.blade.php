@extends('layout')
@section('title', 'Posts')
@section('content')
    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="3"></textarea>
        </div>
    </form>
@endsection
