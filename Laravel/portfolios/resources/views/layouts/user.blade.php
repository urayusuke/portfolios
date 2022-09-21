<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="{{ asset('js/app.js') }}" defer="defer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    body {
        margin: 0;
    }

    .bg-b {
        background-color: #2ca3db;
    }

    .c-w {
        color: #fff;
    }

    header,footer {
        display: flex;
        justify-content: space-between;
        width: 100%;
        height: 100px;
        color: #fff;
        background-color: #2ca3db;
        align-items: center;
    }

    .title {
        margin-right: auto;
        margin-left: 10px;
    }

    .menu-group{
        margin-right: 10px;
    }

    .menu-item {
        list-style: none;
        display: inline-block;
        padding: 10px;
    }

    footer{
        /* position: absolute; */
        bottom: 0;
    }
</style>

<body>
    <header>
        <h1 class="title">blue portfolio</h1>
        <nav class="nav">
            <ul class="menu-group">
                <li class="menu-item">
                    <a>
                        プロフィール
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://github.com/urayusuke">
                    Git Hub
                    </a>
                </li>
                <li class="menu-item">
                    <a href="https://note.com/blue_69">
                    Note
                    </a>
                </li>
                <li class="menu-item">
                    <a>
                    作品集
                    </a>
                </li>
                <li class="menu-item">
                    <a>
                    スキル
                    </a>
                </li>
                <li class="menu-item">
                    <a>
                        お問合せ
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    {{-- <footer>
        
    </footer> --}}
</body>

</html>
