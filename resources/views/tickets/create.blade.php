@extends('layout.master')
@section('title', 'Contact')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            {!! Form::open(array ('url' => 'contact')) !!}
            {!! Form::label('First name') !!}
            {!! Form::text('firstname', 'Enter your first name') !!}
            <br />
            {!! Form::label('Last name') !!}
            {!! Form::text('lastname', 'Enter your last name') !!}
            <br />
            {!! Form::submit() !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection