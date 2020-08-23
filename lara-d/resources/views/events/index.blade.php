@extends('layouts.common')
@section('content')
    <table>
        <tr>
            <th>イベント名</th>
            <th>開始時間</th>
            <th>終了時間</th>
            <th></th>
        </tr>
        @foreach($events as $event)
            <tr>
                <td><a href="">{{ $event->name }}</a></td>
                <td>{{ $event->start_datetime }}</td>
                <td>{{ $event->end_datetime }}</td>
                <td>参加する</td>
            </tr>
        @endforeach
    </table>
@endsection
