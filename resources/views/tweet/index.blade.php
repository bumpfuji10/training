<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>つぶやきアプリ</title>
</head>
<body>
  <h1>つぶやきアプリ</h1>
  <div>
    <p>投稿フォーム</p>
    <!--- フォームタグ内にあるデータの送信先の指定と送信するHTTPメソッドを定義する。 --->
    <form action="{{ route('tweet.create') }}" method="post">
      @csrf
      <laravel for="tweet-content">つぶやき</laravel>
      <span>140文字まで</span>
      <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやきを入力"></textarea>
      @error('tweets')
      <p style="color: red;">{{ $message }}</p>
      @enderror
      <button type="submit">投稿</button>
    </form>
  </div>
</body>
</html>
