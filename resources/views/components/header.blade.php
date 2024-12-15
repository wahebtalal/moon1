<section class="pb-12">
    <div class="w-full relative px-6 xl:px-0 pb-6 lg:pb-12 bg-dark-header b-b-l-r-16">
        <nav class="lg:hidden relative z-40">
            <div class="flex py-6 justify-between items-center px-4">
                <div>
                    <img class=" " src="/storage/assets/logo2.png" alt="" />
                </div>

            </div>
        </nav>
        <nav class="container mx-auto hidden relative z-10 w-full lg:flex justify-between items-center pt-20">
            <div class=" ">
                <a href="#">
                    <img class="" src="/storage/assets/logo2.png" />
                </a>
            </div>
        </nav>
        <div class="pb-8 lg:pb-32 pt-4 lg:flex flex-row-reverse items-center relative z-10 container mx-auto">
            <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0">
                <img class="ml-auto  rounded-lg" src="/storage/{{setting('header.rightHero')}}" />
            </div>
            <div class="w-full lg:w-1/2 h-full mt-8 lg:mt-0">
                <p class="text-white uppercase text-2xl mb-4">{{setting('header.preTitle')}}</p>
                <h1 class="font-bold text-white text-80px mb-8">{{setting('header.title')}}</h1>
                <p class="text-white text-lg font-regular mb-8">{{setting('header.paragraph')}}</p>
                {{--                        <button class="leading-4 bg-white hover:bg-blue-200 py-3 lg:py-6 px-6 lg:px-12 font-semibold clr-dark-blue lg:text-2xl rounded">Learn More</button>--}}
            </div>
        </div>
    </div>
</section>
