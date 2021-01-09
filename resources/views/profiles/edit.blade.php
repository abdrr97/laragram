<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.navigation')
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('profile.update',['user'=>$user]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")

                <x-auth-validation-errors></x-auth-validation-errors>
                <div class="p-4">
                    <x-label>Profile Title</x-label>
                    <x-input value="{{ old('title') ?? $user->profile->title }}" name="title" class="w-full" type="text"></x-input>
                </div>
                <div class="p-4">
                    <x-label>Profile BIO</x-label>
                    <x-input value="{{ old('bio') ?? $user->profile->bio }}" name="bio" class="w-full" type="text"></x-input>
                </div>
                <div class="p-4">
                    <x-label>Profile URL</x-label>
                    <x-input value="{{ old('url') ?? $user->profile->url }}" name="url" class="w-full" type="url"></x-input>
                </div>

                <div class="p-4">
                    <x-label>Profile Image</x-label>
                    <x-input name="image" class="w-full" type="file"></x-input>
                </div>

                <div class="p-4">
                    <x-button class="px-10">Save Profile</x-button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>