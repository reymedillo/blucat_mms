<form method="POST" action="/user/create-confirm">
    {!! csrf_field() !!}
    <div>ID<input type="text" name="name" value="{{ old('name') }}"></div>
    <div>メールアドレス<input type="email" name="email" value="{{ old('email') }}"></div>
    <div>パスワード<input type="password" name="password"></div>
    <div>パスワード確認<input type="password" name="password_confirmation"></div>
    <div>住所<input type="text" name="address" value="{{ old('address') }}"></div>
    <div>電話番号<input type="text" name="tel" value="{{ old('tel') }}"></div>
    <div><button type="submit">登録</button></div>
</form>	
@foreach($errors->all() as $error)
{{$error}}
@endforeach