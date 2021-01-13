<x-app-layout>
    <x-slot name="navigation">
        <x-navigation>
            <x-slot name="login">
                @if(Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                    <div class="inline-flex rounded-md hover:shadow ">
                        <a href="{{ route('profile',Auth::id()) }}" class="px-4 py-1 border border-transparent text-sm font-medium rounded-md text-blue-600">
                            <div>{{ Auth::user()->username }}</div>
                        </a>
                    </div>
                    @else
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{ route('login') }}" class="px-4 py-1 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600">
                            Log In
                        </a>
                    </div>

                    @if(Route::has('register'))
                    <div class="inline-flex rounded-md hover:shadow ">
                        <a href="{{ route('register') }}" class="px-4 py-1 border border-transparent text-sm font-medium rounded-md text-blue-600">
                            Sign Up
                        </a>
                    </div>
                    @endif

                    @endauth
                </div>
                @endif
            </x-slot>
        </x-navigation>
    </x-slot>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-1 ">
        <div class="grid grid-cols-3 gap-4">

            @foreach( $profiles as $profile)
            <div>
                <strong>Title:</strong>
                {{ $profile->title }}
                <div>
                    <strong>Bio:</strong>
                    {{ $profile->bio }} <a href="{{ $profile->url }}">{{ $profile->url }}</a>
                </div>
                <a href="{{ route('profile',[$profile->user->id]) }}">View More</a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
