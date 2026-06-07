@extends('index')

@section('section-container')

<h1>
    {{ $post?->title }}
</h1>
<p>
    {{ $post?->content }}
</p>
@endsection