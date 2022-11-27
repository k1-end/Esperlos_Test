<div>
    <!-- logo -->
    <div>
        <img src="" alt="logo">
    </div>

    <!-- auth buttons -->
    <div>
        @guest
            <a href="{{route('login')}}">ورود</a>
            <a href="{{route('register')}}">ثبت نام</a>
        @endguest
        @auth
            <a href="{{route('logout')}}">خروج</a>
            <a href="{{route('dashboard')}}">داشبورد</a>
        @endauth
    </div>
</div>
