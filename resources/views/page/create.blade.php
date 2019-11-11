@extends('layouts.master')

@section('content')
    <h1>Создать новую статью</h1>
    <hr/>

    {!! Form::open(['url' => '/page', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        <!-- Name Field -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Название', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                <span class="help-block text-danger">
                    {{ $errors -> first('name') }}
                </span>
            </div>
        </div>

        <!-- Text Field -->
        <div class="form-group{{ $errors->has('pagetext') ? ' has-error' : '' }}">
            {!! Form::label('pagetext', 'Текст', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::textarea('pagetext', null, ['class' => 'form-control']) !!}
                <span class="help-block text-danger">
                        {{ $errors -> first('pagetext') }}
                    </span>
            </div>
        </div>

    <!-- Submit Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
                {!! Form::submit('Создать', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
@endsection