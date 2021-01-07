<x-app-layout>
    <x-slot name="navigation">
        <x-navigation>
            <x-slot name="login">
                @if(Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            Auth
                        @else
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('login') }}"
                                    class="px-4 py-1 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600">
                                    Log In
                                </a>
                            </div>

                            @if(Route::has('register'))
                                <div class="inline-flex rounded-md hover:shadow ">
                                    <a href="{{ route('register') }}"
                                        class="px-4 py-1 border border-transparent text-sm font-medium rounded-md text-blue-600">
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
        <div class="w-11/12 flex  px-10">
            <figure class="flex justify-center p-8">
                <img class="mx-auto bg-center w-40 h-40 rounded-full space-x-10 m-10 bg-cover bg-no-repeat "
                    src="https://tailwindcss.com/_next/static/media/sarah-dayan.a8ff3f1095a58085a82e3bb6aab12eb2.jpg"
                    alt="profile.png">
                <div class=" pt-6 md:p-8 text-left space-y-4">
                    <figcaption class="font-medium">
                        <div class="w-8/12 mb-5 text-2xl flex justify-between">
                            xbluetigergames
                            <x-button type="button" class=" capitalize bg-white text-black px-3">
                                Edit Profile
                            </x-button>
                            <x-button type="button" class=" capitalize bg-blue-500 hover:bg-blue-600 text-black px-3">
                                Follow
                            </x-button>
                        </div>
                        <div class="w-5/12 my-5">
                            <ul class="flex justify-between ">
                                <li><span class="font-bold">7</span> <a href="#">posts</a> </li>
                                <li><span class="font-bold">40</span> <a href="#">followers</a></li>
                                <li><span class="font-bold">2</span> <a href="#">following</a> </li>
                            </ul>
                        </div>
                        <div class="sm:">
                            <p class="font-bold text-lg">
                                xbluetigergames
                            </p>
                            <div class="text-gray-500 ">
                                Here you’ll find all the greatest gaming clips from games combined with creative editing
                                that you won’t find on any other channel
                                Check Our Channel<br>
                                <a href="#" class="text-blue-800 font-semibold">bit.ly/2kVjWZj</a>
                            </div>
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>

        <div class="pb-20">
            <div class="grid grid-cols-3 gap-10 z-10">
                <x-image-post
                    src="https://tailwindcss.com/_next/static/media/sarah-dayan.a8ff3f1095a58085a82e3bb6aab12eb2.jpg"
                    alt="Profile pic">
                </x-image-post>
                <x-image-post
                    src="https://tailwindcss.com/_next/static/media/sarah-dayan.a8ff3f1095a58085a82e3bb6aab12eb2.jpg"
                    alt="Profile pic">
                </x-image-post>
                <x-image-post
                    src="https://tailwindcss.com/_next/static/media/sarah-dayan.a8ff3f1095a58085a82e3bb6aab12eb2.jpg"
                    alt="Profile pic">
                </x-image-post>
            </div>
        </div>
    </div>
</x-app-layout>
