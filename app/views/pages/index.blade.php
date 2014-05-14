@extends('layouts.master')

@section('content')

<div class="starter-template">
    <h1>{{ Auth::check() ? "Welcome," . Auth::user()->username
        : "Why don't you Sign-Up?" }}</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem cum debitis doloribus ducimus eius eligendi, exercitationem facilis inventore, iusto laudantium, mollitia nihil odio odit pariatur reprehenderit rerum similique vero?</p>
</div>

@stop
