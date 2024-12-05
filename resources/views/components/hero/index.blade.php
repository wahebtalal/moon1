<div class="relative h-screen bg-black/50">
    <img src="{{ asset(setting('main.background')) }}" class="absolute xl:h-screen h-full w-full" />
    <img src="/images/Vector 1.png" class="absolute right-0 top-0" />
    <div class="container mx-auto relative h-full pt-16 ">
        <!-- Navbar -->
        <div class="top-0 absolute w-full items-center justify-between flex px-6 py-4">
            <div class="lg:w-1/5">
                <img src="{{asset('assets/logo.png')}}" />
            </div>
            <div class="lg:w-4/5 flex items-center justify-end">
                <ul class="hidden xl:flex f-m-m">
                    <a href="">
                        <li class="text-2xl text-white mr-8 font-bold border-b-2 pb-1 border-purple-500">Home</li>
                    </a>
                    <a href="">
                        <li class="text-2xl text-white pr-8 font-normal">Tour</li>
                    </a>
                    <a href="">
                        <li class="text-2xl text-white pr-8 font-normal">Explore</li>
                    </a>
                    <a href="">
                        <li class="text-2xl text-white pr-8 font-normal">About Us</li>
                    </a>
                    <a href="">
                        <li class="text-2xl text-white font-normal mr-48">Contact</li>
                    </a>
                </ul>
                <button class="hidden xl:block py-3 px-6 text-white f-m-m rounded text-2xl purple">Sign Up</button>
                <div class="xl:hidden">
                    <svg id="open" onclick="MenuHandler(true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <line x1="4" y1="8" x2="20" y2="8"></line>
                        <line x1="4" y1="16" x2="20" y2="16"></line>
                    </svg>
                    <div id="close" class="hidden close-m-menu" onclick="MenuHandler(false)">
                        <svg aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar -->
        <!--Mobile responsive sidebar-->
        <div class="xl:hidden">
            <div class="w-full z-20 absolute top-0 mt-20 bg-gray-800 shadow flex-col justify-between hidden pb-12 transition duration-150 ease-in-out" id="list">
                <div class="px-8">
                    <ul class="f-m-m">
                        <a>
                            <li class="text-white pt-8">Home</li>
                        </a>
                        <a>
                            <li class="text-white pt-8">Tour</li>
                        </a>
                        <a>
                            <li class="text-white pt-8">Explore</li>
                        </a>
                        <a>
                            <li class="text-white pt-8">About Us</li>
                        </a>
                        <a>
                            <li class="text-white pt-8">Contact</li>
                        </a>
                    </ul>
                    <button class="py-3 px-6 mt-8 text-white f-m-m purple">Sign Up</button>
                </div>
            </div>
        </div>

        <!-- Sidebar ends -->
        <!-- hero -->
        <x-hero.base/>
    </div>
    <!-- Hero -->
</div>
