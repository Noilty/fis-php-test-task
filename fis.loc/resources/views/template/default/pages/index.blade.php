@extends('template.default.layouts.main')

@section('title', 'Главная')

@section('content')
    <h2>PageController::actionIndex</h2>
    <div class="row">
        <div class="col">
            {{ $popular_author->surname }}
            {{ $popular_author->name }}
            {{ $popular_author->middle_name }}
            <small>[Популярный автор]</small>
        </div>
        <div class="col">
            @if(!empty($gold_reader))
                {{ $gold_reader->surname }}
                {{ $gold_reader->name }}
                {{ $gold_reader->middle_name }}
                <small>[Злостный читатель]</small>
            @else
                Пусто
                <small>[Злостный читатель]</small>
            @endif
        </div>
    </div>
@endsection
