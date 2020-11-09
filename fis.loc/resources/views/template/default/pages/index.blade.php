@extends('template.default.layouts.main')

@section('title', 'Главная')

@section('content')
    <h2>PageController::actionIndex</h2>
    <span>{{ $popular_author->surname }} {{ $popular_author->name }} {{ $popular_author->middle_name }}</span>
    <small>[Популярный автор]</small>
    <br>
    <span>{{ $gold_reader->surname }} {{ $gold_reader->name }} {{ $gold_reader->middle_name }}</span>
    <small>[Злостный читатель]</small>
@endsection
