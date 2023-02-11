@extends('layouts/app')
@section('pagetitle')
    Add Post
@endsection

@section('content')
    {{-- @dd($users) --}}
    @if ($errors->any())
        {{-- @dump($errors) --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="post">
        {{-- @method('put')  --}}
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1"
                placeholder="Write a descriptive title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        {{-- <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Post Creator</label>
            <select name="user_id" class="form-select" id="exampleFormControlInput2">
                <option selected disabled>Select creator</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="mb-3">
            <label for="formFile" class="form-label">Post image</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <button type="submit" class="btn btn-success mt-5 w-25">Add</button>
    </form>
@endsection
