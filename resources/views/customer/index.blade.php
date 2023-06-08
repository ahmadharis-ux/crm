@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger " role="alert">
            {{ session('error') }}
        </div>
        @endif
    </div>
    <div class="d-flex justify-content-center">
        <label for=""> {{auth()->user()->name}} </label>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection