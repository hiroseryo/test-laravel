@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="container">
    <header>
        <h1>FashionablyLate</h1>
    </header>
    <section class="contact-form">
    <h2>Contact</h2>
        <form action="/confirm" method="post">
            @csrf
            <div class="form-group">
                <label for="last_name">お名前 <span class="required">※</span></label>
                <input type="text" name="last_name" placeholder="例: 山田" value="{{ old('last_name')}}">
                <div class="form-error">
                    @error('last__name')
                    {{ $message}}
                    @enderror
                </div>
                <input type="text" name="first_name" placeholder="例: 太郎" value="{{ old('first_name')}}">
                <div class="form__error">
                    @error('first_name')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label>性別 <span class="required">※</span></label>
                    <input checked type="radio" name="gender" value="男性">
                    <label>男性</label>
                    <input type="radio" name="gender" value="女性">
                    <label>女性</label>
                    <input type="radio" name="gender" value="その他">
                    <label>その他</label>
                    <div class="form-error">
                        @error('gender')
                        {{ $message}}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス <span class="required">※</span></label>
                <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email')}}">
                <div class="form-error">
                    @error('email')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="phone">電話番号 <span class="required">※</span></label>
                    <input type="tel" maxlength="5" name="tel" placeholder="080">
                    <span>-</span>
                    <input type="tel" maxlength="5" name="tel" placeholder="1234">
                    <span>-</span>
                    <input type="tel" maxlength="5" name="tel" placeholder="5678">
                <div class="form-error">
                    @error('tel')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="address">住所 <span class="required">※</span></label>
                <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                <div class="form-error">
                    @error('address')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
            </div>
            <div class="form-group">
                <label for="content">お問い合わせの種類 <span class="required">※</span></label>
                <select name="category_id">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
                <div class="form-error">
                    @error('category_id')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="detail">お問い合わせ内容 <span class="required">※</span></label>
                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                <div class="form-error">
                    @error('detail')
                    {{ $message}}
                    @enderror
                </div>
            </div>
            <div class="form-group submit-button">
                <button type="submit">確認画面</button>
            </div>
        </form>
    </section>
</div>