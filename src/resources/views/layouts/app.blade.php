<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRFトークン -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Atte
            </a>
        </div>
        @yield('nav')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <small>Atte,inc.</small>
    </footer>
</body>


</html>