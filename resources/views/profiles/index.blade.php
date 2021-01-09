<x-app-layout>
    <x-slot name="navigation">
        <x-navigation>
            <x-slot name="login">
                @if(Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                    <div class="hidden p-3 rounded-md  hover:shadow sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-semibold text-blue-600 hover:text-blue-800   focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->username }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
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
        <div class="w-11/12 flex  px-10">
            <figure class="flex justify-center p-8 w-full">
                <img class="mx-auto bg-center w-40 h-40 rounded-full space-x-10 m-10 bg-cover bg-no-repeat " src="{{ $user->profile->profileImage() }}" alt="profile.png">
                <div class="w-full pt-6 md:p-8 text-left space-y-4">
                    <figcaption class="font-medium">
                        <div class="w-8/12 mb-5 text-2xl flex justify-between">
                            {{ $user->username }}
                            @can('update', $user->profile)
                            <a href="{{ route('posts.create') }}" class="inline-flex items-center  py-2 border border-transparent rounded-md font-semibold text-xs tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 capitalize bg-white text-black px-3">
                                Add post
                            </a>
                            <a href="{{ route('profile.edit',['user'=>$user]) }}" class="inline-flex items-center  py-2 border border-transparent rounded-md font-semibold text-xs tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 capitalize bg-white text-black px-3">
                                Edit Profile
                            </a>
                            @endcan
                            <x-button type="button" class=" capitalize bg-blue-500 hover:bg-blue-600 text-black px-3">
                                Follow
                            </x-button>
                        </div>
                        <div class="w-5/12 my-5">
                            <ul class="flex justify-between ">
                                <li><span class="font-bold">{{ $user->posts->count() }}</span> Posts </li>
                                <li><span class="font-bold">40</span> Followers</li>
                                <li><span class="font-bold">2</span> Following </li>
                            </ul>
                        </div>
                        <div class="sm:">
                            <p class="font-bold text-lg">
                                {{ $user->name }}
                            </p>
                            <div class="text-gray-500 ">
                                {{ $user->profile->title ?? '' }}
                                <br>
                                {{ $user->profile->bio ?? '' }}
                                <br>
                                <a href="#" class="text-blue-800 font-semibold">
                                    {{ $user->profile->url ?? '' }}
                                </a>
                            </div>
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>

        <div class="pb-20">
            <div class="grid grid-cols-3 gap-10 z-10">
                @foreach($user->posts as $post)
                <a href="{{ route('posts.show',$post->id) }}">
                    <x-image-post src="/storage/{{ $post->image }}" alt="{{ $post->caption }}"></x-image-post>
                    {{ $post->caption }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>