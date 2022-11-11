@extends('layouts.layouts')
@section('title', '新規作成')
@section('main')
    <h3>作成ページ</h3>
    <div>
        <form action="/tasks" method="POST">
        @csrf
        @method(PATCH)
            <div class="form-group">
                <label>タスク名</label>
                <input type="text" name="task_name" class="form-control">
            </div>
            <div class="form-group">
                <label>達成目標年</label>
                <input type="number" name="year" class="form-control">
            </div>
            <div class="form-group">
                <label>月</label>
                <input type="number" name="month" class="form-control">
            </div>
            <div class="form-group">
                <label>日</label>
                <input type="number" name="day" class="form-control">
            </div>
            <div class="form-group">
                <label>メモ</label>
                <input type="text" name="memo" class="form-control">
            </div>
            <div style="display:flex; justify-content:space-around; padding-top:20px">
                <button type="reset" class="btn btn-primary">リセット</button>
                <button type="submit" class="btn btn-primary">保存する</button>
            </div>
        </form>
    </div>
@endsection
