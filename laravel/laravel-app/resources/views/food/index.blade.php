@extends('layouts.app')

@section('content')
    <h1>This is food page</h1>
    <a href="food/create" class="btn btn-primary" role="button">Add a new food</a><br>
    {{-- Use for only one object
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div class="ms-2 me-auto">
            <div class="fw-bold">{{ $food->name }}</div>
            {{ $food->description }}
        </div>
        <span class="badge bg-primary rounded-pill">
            {{ $food->count }}
        </span>
    </li> --}}

    Use for array
    <ul class="list-group">
        @foreach ($foods as $food)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                        <a href="/food/{{ $food->id }}">
                            {{ $food->name }}
                        </a>
                    </div>
                    {{ $food->description }}
                </div>
                <span class="badge bg-primary rounded-pill">
                    {{ $food->count }}
                </span>
                <a href="food/{{ $food->id }}/edit">Edit</a>

                {{-- Delele a food --}}
                <form action="/food/{{ $food->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xoa</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
