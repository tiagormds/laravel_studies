@extends('layouts.main_layout')
@section('content')
    {{-- Comentário de blade --}}

    @if($value == 100)
        <h1>Primeira parte do código!</h1>
    @endif
@endsection
