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
    <form method="POST" action="{{url('login')}}">
        @csrf
        <label for="email">ایمیل</label>
        <input type="text" name="email" id="email">
        <label for="password">رمز</label>
        <input type="password" name="password" id="password">
        <button type="submit">ورود</button>
    </form>
</x-layout>