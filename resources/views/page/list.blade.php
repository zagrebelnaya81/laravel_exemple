@extends('layouts.master')

@section('content')
    <h1>Статьи <a href="{{ url('/page/create') }}" class="btn btn-primary pull-right btn-sm">Новая статья</a></h1>
    <hr/>

    @include('partials.flash_notification')

    @if(count($pageList))
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Текст</th>
                    <th>Создана</th>
                    <th>Действия</th>
                </tr>
                </thead>

                <tbody>
                @foreach($pageList as $page)
                    <tr>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->pageText }}</td>
                        <td>{{ $page->updated_at }}</td>
                        <td>
                            {!! Form::open(['route' => ['page.update', $page->id], 'class' => 'form-inline', 'method' => 'put']) !!}
                                @if($page->active)
                                    {!! Form::submit('Активна', ['class' => 'btn btn-info btn-xs']) !!}
                                @else
                                    {!! Form::submit('Неактивна', ['class' => 'btn btn-success btn-xs']) !!}
                                @endif
                            {!! Form::close() !!}

                            {!! Form::open(['route' => ['page.edit', $page->id], 'class' => 'form-inline', 'method' => 'put']) !!}
                                {!! Form::submit('Редактировать', ['class' => 'btn btn-success btn-xs']) !!}
                            {!! Form::close() !!}


                            {!! Form::open(['route' => ['page.destroy', $page->id], 'class' => 'form-inline', 'method' => 'delete']) !!}
                                {!! Form::hidden('id', $page->id) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            {!! $pageList->render() !!}
        </div>
    @else
        <div class="text-center">
            <h3>Нет активных статей</h3>
            <p><a href="{{ url('/page/create') }}">Создать новую статью</a></p>
        </div>
    @endif
@endsection