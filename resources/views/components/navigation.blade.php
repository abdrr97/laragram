<nav class="bg-white border-b border-gray-100 shadow h-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between content-center">
            <!-- Logo -->
            <a class="flex-shrink-0 flex items-center" href="{{ route('home') }}">
                <x-application-logo class="block h-8 w-auto fill-current text-gray-600" />
                <div class="pl-4">
                    <h4 class="text-lg">{{ config('app.name','Laravel') }}</h4>
                </div>
            </a>
            <div class="flex-shrink-0 flex items-center">
                <x-input id="search_input" name="search" type="search" placeholder="search"
                    class="outline-0 px-4 border-2 h-8 bg-gray-100">
                </x-input>
            </div>

            {{ $login }}

        </div>
    </div>
</nav>
