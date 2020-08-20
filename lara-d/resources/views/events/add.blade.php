<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="{{asset('css/common.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/jquery.datetimepicker.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.full.min.js"></script>
        <script>
            $(function(){
                $(".datetimepicker").datetimepicker();
            });
        </script>
    </head>
    <body>   
        <form class="event-form" method="POST" action="/events/create">
            {{ csrf_field() }} 
            <div class="form-header">
                新規イベント投稿
            </div>
            <div class="form-body">
                <div class="input-box">
                    <label for="name">イベント名</label>
                    <input class="input-form" type="text" name="name">
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('name') as $error)
                                <li class="error-message">※{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-box">
                    <label for="detail">イベント詳細</label>
                    <textarea class="input-form" name="detail"></textarea>
                </div>
                @if ($errors->has('detail'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('detail') as $error)
                                <li class="error-message">※{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-box">
                    <label for="start_datetime">開始時間</label>
                    <input class="input-form datetimepicker" type="text" name="start_datetime">
                </div>
                @if ($errors->has('start_datetime'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('start_datetime') as $error)
                                <li class="error-message">※{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-box">
                    <label for="end_datetime">終了時間</label>
                    <input class="input-form datetimepicker" type="text" name="end_datetime">
                </div>
                @if ($errors->has('end_datetime'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('end_datetime') as $error)
                                <li class="error-message">※{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-box">
                    <label for="number_of_members">募集人数</label>
                    <input class="input-form" type="text" name="number_of_members">
                </div>
                @if ($errors->has('number_of_members'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('number_of_members') as $error)
                                <li class="error-message">※{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-box">
                    <label for="url">URL</label>
                    <input class="input-form" type="text" name="url">
                </div>
                @if ($errors->has('url'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('url') as $error)
                                <li class="error-message">※{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                    <input class="submit-btn" type="submit" value="投稿する">
                </div>
            </div>
        </form>
    </body>
</hrml>