@extends('layouts.common')
@section('content')
    <div id="event-index" class="event-box">
        <div class="event-header">
            イベント一覧
        </div>
        <table>
            <tr>
                <th><strong>イベント名</strong></th>
                <th><strong>開始時間</strong></th>
                <th></th>
            </tr>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->name }}</td>
                <td>{{ $event->start_datetime }}</td>
                <td><a class="show-btn" href="{{action('EventController@show',['event' => $event])}}">詳細</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="mt-4 mx-auto pagination-box">
        {{$events->links()}}
    </div>
@endsection
