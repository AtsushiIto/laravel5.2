<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('SERVICE_NAME')}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        #app{
            width:100%;

        }
        .header{
            border: 1px solid #efefef;
            height: 80px;
            background: #33ffcc;
        }
        #contents{
            border: 1px solid #efefef;
            height: 400px;
        }
        footer {
            border: 1px solid #efefef;
            height: 160px;
            background: #ccffff;
        }
    </style>
</head>
<body id="app">

    <div class="header">
        ヘッダーです。
        <div class="user_info">
            @yield('user_info')
        </div>
    </div>

    {{-- ページ毎のコンテンツを表示します   --}}
    <div id="contents">
        @yield('content')
    </div>

    <footer>
        @section('footer')
            フッターが表示されます（親）
        @show
    </footer>
</body>
</html>
