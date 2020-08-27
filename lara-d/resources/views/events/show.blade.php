@extends('layouts.common')

@section('content')
<div class="event-box">
    <div class="event-header">
        イベント詳細
    </div>
    <div class="event-body">
        <div class="item">
            <div>イベント名：{{$event->name}}</div>
        </div>
        <div class="item">
            <div>イベント詳細：{{$event->detail}}</div>
        </div>
        <div class="item">
            <div>開始時間：{{$event->start_datetime}}</div>
        </div>
        <div class="item">
            <div>終了時間：{{$event->end_datetime}}</div>
        </div>
        <div class="item">
            <div>募集人数：{{$event->number_of_members}}人</div>
        </div>
        <div class="item">
            <div>URL：{{$event->url}}</div>
        </div>
    </div>
</div>
@endsection
