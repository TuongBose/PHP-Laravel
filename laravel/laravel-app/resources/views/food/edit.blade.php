@extends('layouts.app')

@section('content')
    <h1>Enter food information</h1>
    {{-- Not working, because is related to CSRF - cross site request forgery --}}
    <form action="/food/{{ $food->id }}" method="POST">
        @csrf
        @method('PUT')
        {{-- The key is generated every session start --}}
        {{-- only apply to non-read routes --}}
        {{-- If some hacker access to this site from hist/her site --}}
        <input type="text" name="name" class="form-control" placeholder="Enter food's name" value="{{ $food->name }}">
        <input type="text" name="description" class="form-control" placeholder="Enter food's description" value="{{ $food->description }}">
        <input type="text" name="count" class="form-control" placeholder="Enter food's count" value="{{ $food->count }}">
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
