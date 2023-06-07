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
        <div class="card">
            <div class="card-body">
                <form action="/" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-2">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-sm btn-primary">Login</button>
                    </div>
                    <a href="/daftar" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif" class="d-flex justify-content-center">Daftar Akun</a>
                </form>
            </div>
        </div>
    </div>
@endsection