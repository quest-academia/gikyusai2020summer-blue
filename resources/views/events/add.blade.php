@extends('layouts.common')
@section('content')
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
                <input class="input-form" type="number" name="number_of_members">
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
                <input id="send" class="submit-btn" type="submit" value="投稿する">
            </div>
        </div>
    </form>
@endsection

    <script type="text/javascript" src="https://static.line-scdn.net/liff/edge/2.1/sdk.js">
        liff.init(
            {
            liffId: '1654879471-B8Qy9KK7'
            }
            ).then(() => {
                if (!liff.isLoggedIn()) {
                liff.login();
            }
                document.getElementById('send').addEventListener('click', send);
                })
            };

            function send() {
                liff.shareTargetPicker([{
                'type': 'text',
                'text': 'イベントが投稿されました'
                }])
            }
    </script>
