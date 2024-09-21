@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')

<div class="container">
    <header>
        <h1>FashionablyLate</h1>
    </header>
    <section class="confirm-form">
        <h2>確認画面</h2>
        <form action="/thanks" method="post">
            @csrf
            <div class="form-group">
                <label for="last_name">お名前</label>
                <p>{{ $data['last_name'] }} {{ $data['first_name'] }}</p>
                <input type="hidden" name="last_name" value="{{ $data['last_name'] }}">
                <input type="hidden" name="first_name" value="{{ $data['first_name'] }}">
            </div>
            <div class="form-group">
                <label for="gender">性別</label>
                <p>{{ $data['gender'] }}</p>
                <input type="hidden" name="gender" value="{{ $data['gender'] }}">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <p>{{ $data['email'] }}</p>
                <input type="hidden" name="email" value="{{ $data['email'] }}">
            </div>
            <div class="form-group">
                <label for="phone">電話番号</label>
                <p>{{ $data['tel'] }}-{{ $data['tel'] }}-{{ $data['tel'] }}</p>
                <input type="hidden" name="tel" value="{{ $data['tel'] }}">
                <input type="hidden" name="tel" value="{{ $data['tel'] }}">
                <input type="hidden" name="tel" value="{{ $data['tel'] }}">
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <p>{{ $data['address'] }}</p>
                <input type="hidden" name="address" value="{{ $data['address'] }}">
            </div>
            <div class="form-group">
                <label for="building">建物名</label>
                <p>{{ $data['building'] }}</p>
                <input type="hidden" name="building" value="{{ $data['building'] }}">
            </div>
            <div class="form-group">
                <label for="content">お問い合わせの種類</label>
                <p>{{ $data['content'] }}</p>
                <input type="hidden" name="category_id" value="{{ $data['category_id'] }}">
            </div>
            <div class="form-group">
                <label for="detail">お問い合わせ内容</label>
                <p>{{ $data['detail'] }}</p>
                <input type="hidden" name="detail" value="{{ $data['detail'] }}">
            <div class="form-group buttons">
                <button type="submit" class="submit-button">送信</button>
                <button type="button" class="back-button" onclick="history.back()">修正</button>
            </div>
        </form>
    </section>
</div>
