@extends('layouts.master')

@section('content')
    <div class="text-center">
        <h1>Добро пожаловать</h1>
        <hr/>

        <a href="/page">Просмотреть статьи</a>

        @include('partials.flash_notification')

    </div>
@endsection