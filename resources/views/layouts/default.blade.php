<!DOCTYPE html>
<html lang="ja">
{{-- header部分の継承 --}}
<head>
    <meta charset="UTF-8">
    {{-- @yieldは親レイアウトを維持する --}}
    <title>@yield('title', 'Larabel9学習')</title>
    <style>
        .container {
            potison: relative;
            min-height: 100vh;
            max-width: 1200px;
            margin: 0 auto;
        }
        header {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        nav ul {
            display: flex;
            padding: 0;
            list-style: none;
        }
        nav Li {
            margin-right: 10px;
        }
        a {
            color: #0f83fd;
        }
        main {
            padding: 10px 0;
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Larabel9999学習</h1>
            <nav>
                <ul>
                    <li><a href="/">トップ</a></li>
                    <li><a href="/curriculum">カリキュラム</a></li>
                    <li><a href="/event">イベント</a></li>
                    <li><a href="#">サービス</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                </ul>
            </nav>
        </header>

        <main>
            {{-- @yieldは親レイアウトを維持する --}}
            <h2>@yield('title', 'Larabel9学習')</h2>
            @yield('content')
        </main>
        <footer>
            {{-- footer部分の継承 --}}
            <small>&copy; 2022 risarisato</small>
        </footer>
    </div>
</body>
</html>