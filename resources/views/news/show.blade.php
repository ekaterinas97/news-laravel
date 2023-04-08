@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ $news['image'] }}" alt="{{ $news['title'] }}">
                    <div class="card-body">
                        <h4>{{ $news['title'] }}</h4>
                        <p class="card-text">{!! $news['description'] !!}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{ $news['author'] }} | {{ $news['created_at'] }}</small>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
