<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <!-- 異なるcssファイルの設定。 -->
    @yield('css')
    <link rel="icon" href="{{asset('storage/favicon.ico')}}">
    <title>thanks</title>
</head>

<body>
    <div class="header-cover">
        <header class="header">
            <img class="header-icon" src="{{asset('storage/favicon.ico')}}">
            <h1 class="header-title" id="header">Thanks for coach!!</h1>
        </header>
    </div>
    <!-- 以下、異なるページ内容の設定。 -->
    @yield('content')
</body>

</html>