<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigation')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h4> {{ $post->caption }} </h4>
            <img src="/storage/{{ $post->image }}" width="300" height="300">
        </div>
    </div>
</x-app-layout>
