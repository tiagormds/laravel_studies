@extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="{{ route('ssubmit') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">Uername:</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password:</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Login</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
