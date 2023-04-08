@extends('layouts.main')
@section('content')
    <h1 class="cover-heading">About Page</h1>
    <p class="lead">{{ $info }}</p>
    <p class="lead">
        <a href="{{ route('news.index') }}" class="btn btn-lg btn-secondary">Перейти к новостям</a>
    </p>
@endsection




