@extends('index')

@section('section-container')
    <div style="padding:10px">

        <h1>
            {{ $post?->title }}
        </h1>
        <p>
            {{ $post?->content }}
        </p>
    </div>
@endsection
