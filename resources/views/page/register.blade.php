@extends('masterlayout')

@section('title')
    Register |
@endsection

@section('body')
    <div class="flex justify-center my-5">
        <div class="w-[40%] p-7 rounded-md shadow-md shadow-gray-400 flex flex-col gap-5 ">
            <h1 class="text-center text-2xl text-violet-500">Register Here</h1>
            <form action="{{ route('registerUser') }}" method="POST" class="flex flex-col gap-5">
                @csrf
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Name"
                    class="p-2 rounded-md shadow-sm shadow-black w-full">
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                    class="p-2 rounded-md shadow-sm shadow-black w-full">
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <p class="flex gap-1 items-center">
                    <input type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Password"
                        class="p-2 rounded-md shadow-sm shadow-black w-full">
                    <span class="cursor-pointer hover:scale-105" id="togglePassword" ><svg fill="#000000" height="30px" width="30px" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                            <path
                                d="M0,226v32c128,192,384,192,512,0v-32C384,34,128,34,0,226z M256,370c-70.7,0-128-57.3-128-128s57.3-128,128-128
                           s128,57.3,128,128S326.7,370,256,370z M256,170c0-8.3,1.7-16.1,4.3-23.6c-1.5-0.1-2.8-0.4-4.3-0.4c-53,0-96,43-96,96s43,96,96,96
                           c53,0,96-43,96-96c0-1.5-0.4-2.8-0.4-4.3c-7.4,2.6-15.3,4.3-23.6,4.3C288.2,242,256,209.8,256,170z" />
                        </svg></span>
                </p>
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <p class="flex gap-1 items-center">
                    <input type="password" name="password_confirmation" id="password" value="{{ old('password_confirmation') }}"
                        placeholder="Confirm Password" class="p-2 rounded-md shadow-sm shadow-black w-full">
                </p>
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <button type="submit"
                    class="p-2 rounded-md hover:shadow-md hover:shadow-black bg-black text-white border">Register
                    Now</button>
            </form>
            <hr>
            <a href="{{ route('register') }}" class="text-center italic hover:underline transition-all">Click Here to
                Login</a>
        </div>
    </div>
@endsection
