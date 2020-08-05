<form method="POST" action="/events/create">
    {{ csrf_field() }} 
    @if ($errors->has('name'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('name') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for="name">イベント名</label>
        <input type="text" name="name">
    </div>
    @if ($errors->has('detail'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('detail') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for="detail">イベント詳細</label>
        <input type="text" name="detail">
    </div>
    @if ($errors->has('start_datetime'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('start_datetime') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for="start_datetime">開始時間</label>
        <input type="datetime-local" name="start_datetime">
    </div>
    @if ($errors->has('end_datetime'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('end_datetime') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for="end_datetime">終了時間</label>
        <input type="datetime-local" name="end_datetime">
    </div>
    @if ($errors->has('number_of_members'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('number_of_members') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for="number_of_members">募集人数</label>
        <input type="text" name="number_of_members">
    </div>
    @if ($errors->has('url'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('url') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <label for="url">URL</label>
        <input type="text" name="url">
    </div>
    <div>
        <input type="submit" value="投稿する">
    </div>
</form>