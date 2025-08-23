@extends('layouts.app')

@section('content')
    <h1>Enter food information</h1>
    {{-- Not working, because is related to CSRF - cross site request forgery --}}
    <form action="/food" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- The key is generated every session start --}}
        {{-- only apply to non-read routes --}}
        {{-- If some hacker access to this site from hist/her site --}}
        <input type="file" name="image" class="form-control">
        <input type="text" name="name" class="form-control" placeholder="Enter food's name">
        <input type="text" name="description" class="form-control" placeholder="Enter food's description">
        <input type="text" name="count" class="form-control" placeholder="Enter food's count">
        <div>
            <label>Choose a categories:</label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection
