<x-layout>
    <nav>
        @role('admin')
            <a href="{{url('/users')}}">کاربران</a>
        @endrole
    </nav>
    <main>
        {{ $slot }}
    </main>
</x-layout>