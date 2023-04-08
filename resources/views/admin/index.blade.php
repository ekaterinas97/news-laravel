@extends('layouts.admin')
@section('content')
    <h2>Welcome to Admin Panel</h2>
    @php $message = "I'm message! Hello!" @endphp
    <x-alert type="danger" :message="$message"></x-alert>
    <x-alert type="info" :message="$message"></x-alert>
@endsection

