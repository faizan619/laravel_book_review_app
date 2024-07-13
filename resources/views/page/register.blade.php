@extends('masterlayout')

@section('title')
    Register |
@endsection

@section('body')
    <div class="flex justify-center my-5">
        <div class="w-[40%] p-7 rounded-md shadow-md shadow-gray-400 flex flex-col gap-5 ">
            <h1 class="text-center text-2xl text-violet-500">Register Here</h1>
            <form action="{{route('user.store')}}" method="POST" class="flex flex-col gap-5">
                @csrf
                <p class="flex">
                    <input type="text" name="name" value="{{old('name')}}" placeholder="Name" class="p-2 rounded-md shadow-sm shadow-black w-full">
                    <span >o</span>
                </p>
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <p class="flex">
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email" class="p-2 rounded-md shadow-sm shadow-black w-full">
                    <span>0</span>
                </p>
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <p class="flex">
                    <input type="password" name="password" value="{{old('password')}}" placeholder="Password" class="p-2 rounded-md shadow-sm shadow-black w-full">
                    <span>0</span>
                </p>
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <p class="flex">
                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirm Password" class="p-2 rounded-md shadow-sm shadow-black w-full">
                    <span>0</span>
                </p>
                @if ($errors->any())
                    <span class="text-red-700 italic text-sm rounded-md mt-[-15px]">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </span>
                @endif
                <button type="submit" class="p-2 rounded-md hover:shadow-md hover:shadow-black bg-black text-white border">Register Now</button>
            </form>
            <hr>
            <a href="{{route('register')}}" class="text-center italic hover:underline transition-all">Click Here to Login</a>
        </div>
    </div>
@endsection
