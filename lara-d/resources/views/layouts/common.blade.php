<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeShares</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/common.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/jquery.datetimepicker.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.full.min.js"></script>
    <!-- Scripts -->

    <script type="module">
        $(function(){
                $(".datetimepicker").datetimepicker();
            });
    </script>
</head>

<body>
    <main>
        @yield('content')
    </main>
</body>

</html>