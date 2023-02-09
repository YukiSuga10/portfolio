<!DOCTYPE html>
<html lang="ja">
    <body>
        <h3>仕事が来たよ！</h3>
        <p>▶︎内容</p>
        <div>
            <p>名前：{{ $request['name'] }}</p>
            <p>出身：{{ $request['from'] }}</p>
            <p>Email：{{ $request['email'] }}</p>
            <p>問い合わせ内容{{ $request['message'] }}</p>
        </div>
    </body>
</html>
