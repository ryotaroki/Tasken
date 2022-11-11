@extends('layouts.layouts')
@section('title', 'Tasks')
@section('main')
    <table class="table">
        <tr>
            <th>やること</th>
            <th>未達/完了</th>
            <th>登録日</th>
            <th>達成目標日</th>
            <th>期間</th>
            <th>備考</th>
            <th>編集・削除</th>
        </tr>
        <tr>
            <td>{{ $task->task_name }}</td>
            <td>{{ $task->done == 1 ? '未達成' : '達成!' }}</td>
            <td>{{ $task->created_at }}</td>
            <td>{{ $task->year }}年　{{ $task->month }}月{{ $task->day }}日　</td>
            <td>{{ $task->period }}</td>
            <td>{{ $task->memo }}</td>
            <td>
                <a href="{{ route('tasks.edit', $task)}}" class="btn btn-info">編集</a>
                <form action="{{$task->id}}" method="POST" style="display:inline;">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger" onclick="return confirm('本当に削除しますか？')">削除</button>
                </form>
            </td>
        </tr>
    </table>
@endsection
