@extends('layouts.app')

@section('content')
    <h1>PageController about, with share header, footer</h1>
    {{-- @php @endphp is better than
    {{ 
        $x = 1;
    }} --}}

    {{-- @php
        $x = 1;
    @endphp

    @if ($x > 2)
        <h3>x is greater than 2</h3>
    @elseif($x < 10)
        <h3>x is less than 2</h3>
    @else
        <h3>All conditions are not match</h3>
    @endif

    if not = unless
    @unless (empty($name))
        <h3>Name is not empty</h3>
    @endunless
    Or
    @if (!empty($name))
        <h3>Name is not empty</h3>
    @endif
    Or
    @empty(!$name)
        <h3>Name is not empty</h3>
    @endempty
    Or
    @isset($name)
        <h3>Name has been set</h3>
    @endisset

    @switch($name)
        @case('Tuong')
            <h3>This is Tuong</h3>
        @break

        @case('Jesica')
            <h3>This is Jesica</h3>
        @break

        @default
            <h3>No one selected</h3>
    @endswitch

    @for ($i = 0; $i < 10; $i++)
        <h2> i = {{ $i }}</h2>
    @endfor 

    @foreach ($names as $eachName)
        <h3>Each name: {{ $eachName }}</h3>
    @endforeach
    Or
    @forelse ($names as $eachName)
        <h3>Each name: {{ $eachName }}</h3>
    @empty
        <h3>The array is empty</h3>
    @endforelse --}}

    @php
        $x = 1;
    @endphp
    
    @while ($x<10)
        <h3>x = {{ $x }}</h3>
        @php
            $x++;
        @endphp
    @endwhile
@endsection
