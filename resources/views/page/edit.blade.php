@extends('layouts.master')

@section('content')
    <h1>Отредактировать статью</h1>
    <hr/>
    @include('partials.flash_notification')

    @if(count($pageEdit))
        @foreach($pageEdit as $edit)
            {!! Form::open(['url' => '/page/update', 'class' => 'form-horizontal', 'role' => 'form']) !!}
            {!! Form::hidden('id',  $edit->id, ['class' => 'form-control']) !!}
            <!-- Name Field -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', 'Название', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name',  $edit->name, ['class' => 'form-control']) !!}
                    <span class="help-block text-danger">
                            {{ $errors -> first('name') }}
                        </span>
                </div>
            </div>

            <!-- Text Field -->
            <div class="form-group{{ $errors->has('pagetext') ? ' has-error' : '' }}">
                {!! Form::label('pagetext', 'Текст', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('pagetext', $edit->pageText, ['class' => 'form-control']) !!}
                    <span class="help-block text-danger">
                                {{ $errors -> first('pagetext') }}
                            </span>
                </div>
            </div>
        @endforeach
    <!-- Submit Button -->
    <div class="form-inline">
        <div class="col-sm-offset-3 col-sm-2">
            {!! Form::submit('Редактировать', ['class' => 'btn btn-primary']) !!}
        </div>
        <div class="col-sm-offset-4 col-sm-2">
            {!! Form::reset('Отмена', ['class' => 'btn btn-danger']) !!}
        </div>
    </div>
        {!! Form::close() !!}
    @else
        <div class="text-center">
            <h3>Запрашиваемая статья не найдена</h3>
        </div>
    @endif
@endsection