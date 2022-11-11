@extends('layouts.layouts')
@section('title', 'Edit')
@section('main')
    <h3>編集</h3>
    <div>
        <form action="/tasks/{{$task->id}}" method="POST">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label>タスク名</label>
                <input type="text" name="task_name" class="form-control" value="{{$task->task_name}}">
            </div>
            <div class="form-group">
                <label>達成目標年</label>
                <input type="number" name="year" class="form-control"  value="{{$task->year}}">
            </div>
            <div class="form-group">
                <label>月</label>
                <input type="number" name="month" class="form-control" value="{{$task->month}}">
            </div>
            <div class="form-group">
                <label>日</label>
                <input type="number" name="day" class="form-control" value="{{$task->day}}">
            </div>
            <div class="form-group">
                <label>メモ</label>
                <input type="text" name="memo" class="form-control" value="{{$task->memo}}">
            </div>
            <div class="form-group">
                <label>達成</label>
                <input type="radio" name="done" value="2" {{($task->done == 2)? "checked" : ""}}>
                <label>未達成</label>
                <input type="radio" name="done" value="1" {{($task->done == 1)? "checked" : ""}}>
            </div>
            <div style="display:flex; justify-content:space-around; padding-top:20px">
                <button type="submit" class="btn btn-primary">編集する</button>
            </div>
        </form>
    </div>
@endsection
