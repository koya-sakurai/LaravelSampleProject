<!DOCTYPE html>
<html>
    <head>
        <title>ダッシュボード</title>
    </head>
    <body>
        <div class="header">
            <h1>ダッシュボード</h1>
        </div>
        <div class="main">
            <a href="{{url('/members')}}">メンバー一覧</a>
        </div>
        <div class="footer">
            <p>画面を表示した時刻は {{ $now }} でした。</p>
        </div>
    </body>
</html>
