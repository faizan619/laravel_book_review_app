<div class="h-16 bg-violet-500 text-white border flex justify-center items-center">
    <div class="flex justify-between items-center w-full px-5">
        <div class="text-lg">Book Review App</div>
        <div class="flex gap-5 mx-5">
            @if (Auth::check())
            <p class="text-lg capitalize px-5 py-1 rounded-md border cursor-not-allowed">{{ Auth::user()->name }}</p>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="px-5 py-2 capitalize bg-white text-red-600 rounded-md hover:scale-105 transition-all">Logout</button>
            </form>
        @else
        <a href="{{route('login')}}">
            <button class="px-5 py-1 rounded-md border hover:px-7 transition-all">Login</button>
        </a>
        <a href="{{route('register')}}">
            <button class="px-5 py-1 rounded-md border hover:px-7 transition-all">Register</button>
        </a>

        @endif
        </div>
    </div>
</div>
