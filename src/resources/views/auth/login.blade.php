<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>FashionablyLate</h1>
            <a href="/register" class="register-btn">register</a>
        </header>

        <main>
            <h2>Login</h2>
            <div class="form-container">
                <form action="/login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
                        <div class="form__error">
                            @error('email')
                            {{ $message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">パスワード</label>
                        <input type="password" name="password" placeholder="例: coachtech1106">
                        <div class="form__error">
                            @error('password')
                            {{ $message}}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit">ログイン</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>