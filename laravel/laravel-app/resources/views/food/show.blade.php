@extends('layouts.app')

@section('content')
    <h1>Show detail food</h1>
    <img src="{{ asset('images/' . $food->image_path) }}" style="width:30%;">
    <h3>Name:{{ $food->name }}</h3>
    <h3>Count:{{ $food->count }}</h3>
    <h3>Description:{{ $food->description }}</h3>
    <h3>CategoryId:{{ $food->category_id }}</h3>
    <h3>Category's Name:{{ $food->category->name }}</h3>
@endsection
