<x-layout>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{url('register')}}">
    @csrf
    <label for="email">ایمیل</label>
    <input type="text" name="email" id="email">
    <label for="password">رمز</label>
    <input type="password" name="password" id="password">
    <label for="password_confirmation">رمز را دوباره وارد کنید</label>
    <input type="password" name="password_confirmation" id="password_confirmation">
    <button type="submit">ورود</button>
</form>
</x-layout>
