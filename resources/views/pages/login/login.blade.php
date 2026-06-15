@extends('index')

@section('section-container')
    <div style="padding:10px">
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="email" placeholder="Enter Email" name="email">
            <br>
            <input type="password" placeholder="Enter password" name="password">
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
@endsection
