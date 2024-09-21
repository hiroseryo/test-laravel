@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection
@section('js')
<script src="{{ asset('js/modal.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <header>
            <h1>FashionablyLate</h1>
            @if (Auth::check())
            <form action="/logout" method="post" class="logout-btn">
                @csrf
                <button>ログアウト</button>
            </form>
            @endif
        </header>
        
        <main>
            <h2>Admin</h2>
            <form class="search-form" action="/admin/search" method="get" name="keyword" value="{{ old('keyword') }}">
                @csrf
                <input type="text" placeholder="名前やメールアドレスを入力してください"  name="keyword" value="{{ old('keyword') }}">
                <select name="gender">
                    <option value="" disabled selected>性別</option>
                    <option value="">全て</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                </select>
                <select name="category_id">
                <option value="" disabled selected>お問い合わせの種類</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category['id']}}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
                <input type="date" placeholder="年/月/日" name="date" value="{{ old('date') }}">
                <button type="submit" class="search-btn">検索</button>
                <button type="reset" class="reset-btn">リセット</button>
            </form>
            <div class="table-controls">
                <button class="export-btn">エクスポート</button>
                {{ $contacts->links('vendor.pagination.custom') }}
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact['last_name'] }} {{$contact['first_name'] }}</td>
                        <td>{{ $contact['gender'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['category'] ['content'] }}</td>
                        <td><button class="details-btn" id="openModal" data-last_name="{{ $contact->last_name }}" data-first_name="{{ $contact->first_name }}" data-gender="{{ $contact->gender }}" data-email="{{ $contact->email }}" data-tel="{{ $contact->tel }}" data-address="{{ $contact->address }}" data-building="{{ $contact->building }}" data-content="{{ $contact['category'] ['content'] }}" data-detail="{{ $contact->detail }}">詳細</button></td>
                    </div>
                    </tr>
                    @endforeach
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h2>お客様情報</h2>
                            <p><strong>お名前: </strong>山田 太郎</p>
                            <p><strong>性別: </strong>男性</p>
                            <p><strong>メールアドレス: </strong>test@example.com</p>
                            <p><strong>電話番号: </strong>09012345678</p>
                            <p><strong>住所: </strong>東京都</p>
                            <p><strong>建物名: </strong>マンション123</p>
                            <p><strong>お問い合わせの種類: </strong>商品の交換について</p>
                            <p><strong>お問い合わせ内容: </strong>問題</p>
                            <button id="deleteBtn">削除</button>
                        </div>
                    </div>
                </tbody>
            </table>
        </main>
    </div>
@endsection