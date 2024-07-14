<div class="h-12 bg-violet-500 text-white flex justify-center items-center">
    Welcome to The Book Review App : @if (Auth::check())
        {{Auth::user()->name}}
        @endif
</div>
