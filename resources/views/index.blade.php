<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>トップページ</h1>
    <form action="/" method="POST">
        @csrf
        <p>氏名</p>
        <input type="text" name="name">
        <p>メールアドレス</p>
        <input type="email" name="email">
        <br>
        <input type="submit" value="送信する">
    </form>
</body>
</html>






