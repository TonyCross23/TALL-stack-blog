<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <div class="text-gray-800 font-semibold">
            <a href="{{route('home')}}">
                <x-application-logo />
            </a>
        </div>
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">

                <x-nav-link href="{{route('home')}}" :active="request()->routeIs('home')">
                    {{_('Home')}}
                </x-nav-link>
                <x-nav-link href="{{route('posts.index')}}" :active="request()->routeIs('posts.index')">
                    {{_('Blogs')}}
                </x-nav-link>

            </ul>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">

      @auth
          @include('layouts.partials.header-auth')
      @else 
        @include('layouts.partials.header-guest')
      @endauth
    </div>
</nav>