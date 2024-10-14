@extends('layouts.main_layout')
@section('content')
    {{-- Comentário de blade --}}

    {{-- for --}}
    @for($index = 0; $index < 5; $index++)
        <h1>{{ $index }}</h1>
    @endfor

    {{-- foreach --}}
    @foreach($cities as $city)
        <p>{{ $city }}</p>
    @endforeach

    {{-- forelse --}}
    @forelse($names as $name)
        <p>{{ $name }}</p>
    @empty
        <p>Names está vazio</p>
    @endforelse

    {{-- while --}}

    @while($indice < 50)
        <p>Índice: {{ $indice }}</p>

        @php
            $indice++
        @endphp
    @endwhile

@endsection


