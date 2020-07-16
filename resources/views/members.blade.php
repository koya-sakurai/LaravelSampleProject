<!DOCTYPE html>
<html>
    <head>
        <title>メンバー一覧</title>
    </head>
    <body>
        <h1>メンバー一覧</h1>
        <div>
            <table border="1px">
                <tr>
                    <th>名前</th>
                    <th>名前（カナ）</th>
                    <th>メールアドレス</th>
                <tr>
                @foreach($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->name_kana }}</td>
                        <td>{{ $member->email }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            <form action="members" method="POST">
                @csrf
                <input type="text" name="name" value="" />
                <input type="text" name="name_kana" value="" />
                <input type="text" name="email" value="" />
                <input type="submit" />
            </form>
        </div>
        <a href="{{url('/')}}">戻る</a>
    </body>
</html>
