<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
</head>
<body>
    <header>
        <h1>FashionablyLate</h1>
        <a href="/login" class="login-btn">login</a>
    </header>

    <main>
        <h2>Register</h2>
        <form class="register-form" method="post" action="/register">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" name="name" placeholder="例: 山田 太郎" value="{{ old('name') }}">
                <div class="form__error">
                    @error('name')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                <div class="form__error">
                    @error('email')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="password" placeholder="例: coachtech1106">
                <input type="password" name="password_confirmation" placeholder="確認用パスワード">
                <div class="form__error">
                    @error('password')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <button type="submit" class="submit-btn">登録</button>
        </form>
    </main>
</body>
</html>