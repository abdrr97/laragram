<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigation')
    </x-slot>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-1 ">
        <div class="">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="p-4">
                    <x-label>Post Caption</x-label>
                    <x-input class="w-full" name="caption" type="text"></x-input>
                </div>
                <div class="p-4">
                    <x-label>Post Image</x-label>
                    <x-input class="w-full" name="image" type="file"></x-input>
                </div>
                <div class="p-4">
                    <x-button class="px-10">Post</x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>