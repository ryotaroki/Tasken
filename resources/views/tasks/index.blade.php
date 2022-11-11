@extends('layouts.layouts')
@section('main')
    <table class="table">
        <tr>
            <th>やること</th>
            <th>未達/完了</th>
            <th>登録日</th>
            <th>達成目標日</th>
            <th>期間</th>
            <th>備考</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td><a href="{{ route('tasks.show', $task)}}">{{$task->task_name}}</a></td>
            <td>{{ $task->done == 1 ? '未達成' : '達成!' }}</td>
            <td>{{ $task->created_at }}</td>
            <td>{{ $task->year }}年{{ $task->month }}月{{ $task->day }}日　</td>
            <td>{{ $task->period }}</td>
            <td>{{ $task->memo }}</td>
        </tr>
        @endforeach
    </table>
@endsection
