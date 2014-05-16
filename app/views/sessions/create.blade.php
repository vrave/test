@extends('layouts.master')

@section('content')
<h1>Log In</h1>
{{ Form::open(['route' => 'sessions.store', 'method' => 'post']) }}

    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
        {{ $errors->first('email', '<span class="error">:message</span>') }}
    </div>

    <!-- Password Field -->
    <div class="form-group">
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
        {{ $errors->first('password', '<span class="error">:message</span>') }}
    </div>

    <div class="form-group">
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>

    @if (Session::has('flash_message))
    <div class="form-group">
        <p>{{ Session::get('flash_message') }}</p>
    </div>
    @endif
{{ Form::close() }}
@stop