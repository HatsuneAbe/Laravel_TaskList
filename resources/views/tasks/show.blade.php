@extends('layouts.app')
@section('title', '商品詳細')
@section('content')
    <p>ID：{{ $task->id }}</p>
    <p>商品名：{{ $task->name }}</p>
    <p>登録日：{{ $task->created_at }}</p>
    <p>更新日：{{ $task->updated_at }}</p>
@endsection
