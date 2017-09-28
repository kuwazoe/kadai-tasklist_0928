@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! form::label('content','タスク') !!}
        {!! Form::text('content') !!}
        
        {!! form::submit('投稿') !!}
    {!! Form::close() !!}
@endsection