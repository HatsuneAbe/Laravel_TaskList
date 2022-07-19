@extends('layouts.app')

@section('content')

    <!-- Bootstrapの定形コード… -->

    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
    @include('common.errors')

    <!-- 新タスクフォーム -->
{{--      <form action="/task" method="POST" class="form-horizontal">
        {{ csrf_field() }}　--}}

        {{Form::Open(['route'=>'tasks.store'])}}

            <!-- タスク名 -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- タスク追加ボタン -->
            {{Form::open(['route'=>'tasks.store'])}}
            <div class="form-group">
                {{Form::label('name','タスク名：')}}
                {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::submit('登録',['class'=>'btn btn-primary form-control'])}}
            </div>
        {{Form::close()}}
 {{--     </form>　--}}
    </div>

    <!-- TODO: 現在のタスク -->
@endsection
