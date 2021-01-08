<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigation')
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
                <a href="{{route('profile',[$profile->user->id])}}">View More</a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>