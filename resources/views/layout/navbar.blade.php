<!-- ====== Navbar Section Start -->
<header

    x-data="{
    navbarOpen: false
    }
    "
    class="bg-white w-full flex items-center"

>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="px-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img
                        src="{{ url('/img/logo.png') }}"
                        alt="logo"
                        class="w-[128px]"
                    />

                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                               x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="
                          absolute
                          py-5
                          px-6
                          bg-white
                          shadow
                          rounded-lg
                          max-w-[250px]
                          w-full
                          lg:max-w-full lg:w-full
                          right-4
                          top-full
                          lg:block lg:static lg:shadow-none
                        "
                    >
                        <ul class="block lg:flex lg:items-center">
                            @foreach($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                            @endforeach

                            <div class="ml-0 lg:ml-10 xl:ml-16 relative top-1">
                                <div class="g-ytsubscribe" data-channelid="UC_UMEcP_kF0z4E6KbxCpV1w" data-layout="default"
                                     data-count="default"></div>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- ====== Navbar Section End -->
