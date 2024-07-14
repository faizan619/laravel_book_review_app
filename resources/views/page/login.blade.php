@extends('masterlayout')

@section('title')
    Login |
@endsection

@section('body')
    <div class="flex justify-center">
        <div class="w-[40%] p-7 rounded-md shadow-md shadow-gray-400 flex flex-col gap-5 ">
            <h1 class="text-center text-2xl text-violet-500">Login Here</h1>
            @if (session('status'))
            <p class="text-red-700 rounded-md mt-[-15px]">
                {{session('status')}}
            </p>
            @endif
            <form action="{{route('loginUser')}}" method="POST" class="flex flex-col gap-5">
                @csrf
                <input type="email" name="email" value="{{old('email')}}" placeholder="Email"
                    class="p-2 @error('email') border-red-500 @enderror rounded-md shadow-sm shadow-black">
                @if ($errors->any())
                    <span class="text-red-700 px-3 rounded-md mt-[-15px]">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <input type="password" name="password" value="{{old('password')}}" placeholder="Password"
                    class="p-2 @error('password') border-red-500 @enderror rounded-md shadow-sm shadow-black">
                @if ($errors->any())
                    <span class="text-red-700 px-3 rounded-md mt-[-15px]">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <button type="submit"
                    class="p-2 rounded-md hover:shadow-md hover:shadow-black bg-black text-white border">Login in
                    Now</button>
            </form>
            <hr>
            <a href="{{ route('register') }}" class="text-center italic hover:underline transition-all">Create New
                Account</a>
        </div>
    </div>
@endsection
