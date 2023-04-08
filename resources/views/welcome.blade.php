
@extends('layouts.main')
@section('content')

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Страница приветствия!!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('info') }}" role="button">Подробнее &raquo;</a></p>
    </div>
</div>

@endsection
