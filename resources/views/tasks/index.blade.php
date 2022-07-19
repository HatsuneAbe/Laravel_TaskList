@extends('layouts.app')

@section('content')
    <!-- タスクフォームの作成… -->

    <!-- 現在のタスク -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                New tasks
            </div>

            <div class="panel-body">
                {{Form::open(['route'=>'tasks.store'])}}
                <div class="form-group">
                    {{Form::label('name','Task')}}
                </div>
                <div class="form-group">
                    {{Form::text('name',null,['class'=>'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Add Task',['class'=>'btn btn-primary form-control'])}}
                </div>
                {{Form::close()}}
            </div>

            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- テーブルヘッダー -->
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- テーブルボディー -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- タスク名 -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <!-- 削除ボタン -->
                            <td>
                                {{Form::open(['route'=>['tasks.destroy',$task->id],'method'=>'delete'])}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {{Form::close()}}
                            </td>
                        </tr>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
