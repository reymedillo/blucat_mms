<form method="POST" action="/user/create-complete">
    {!! csrf_field() !!}
    <input type="hidden" name="name" value="{{$user['name']}}">
    <input type="hidden" name="email" value="{{ $user['email'] }}">
    <input type="hidden" name="password" value="{{ $user['password'] }}">
    <input type="hidden" name="address" value="{{ $user['address'] }}">
    <input type="hidden" name="password_confirmation" value="{{ $user['password_confirmation'] }}">
    <input type="hidden" name="tel" value="{{ $user['tel'] }}">
    <div><button type="submit">登録</button></div>
</form>
