@extends('layouts.app')
@section('title', 'タスク編集')
@section('content')
    {{ Form::open(['route' => ['tasks.update', $task->id], 'method' => 'put']) }}
    <div class="form-group">
        {{ Form::label('name', 'タスク名：') }}
        {{ Form::text('name', $task->name, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('更新', ['class' => 'btn btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
