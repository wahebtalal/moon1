<section class="pb-12" dir="rtl">
    <div class="w-full relative  pb-6 lg:pb-12 bg-dark-header b-b-l-r-16">
        <nav class="lg:hidden relative z-40">
            <div class="flex py-6 justify-between items-center  ">
                <div>
                    <img class=" " src="/storage/assets/logo2.png" alt="" />
                </div>

            </div>
        </nav>
        <nav class=" hidden relative z-10 w-full lg:flex   pt-20">
            <div class="w-full ">
                <a href="#" class="w-full">
                    <img class="w-full" src="/storage/assets/logo2.png" />
                </a>
            </div>
        </nav>
        <div class="  pt-4 lg:flex flex-row-reverse items-center relative z-10 container mx-auto">
            <div class="w-full lg:w-1/2 h-full  lg:pr-10 xl:pr-0">
                <img class="ml-auto    rounded-lg" src="{{Storage::url(setting('header.rightHero'))}}" />
            </div>
            <div class="w-full lg:w-1/2 h-full mt-8 lg:mt-0 px-10 py-5 [&_*]:font-noor">
                <p class="text-white uppercase text-2xl mb-4">{!! setting('header.preTitle') !!}</p>
                <h1 class="font-bold [&_*]:font-noor text-white text-80px mb-8">{!!  setting('header.title')!!}</h1>
                <p class="text-white [&_*]:font-noor text-lg  mb-8">{!!  setting('header.paragraph')!!}</p>
                {{--                        <button class="leading-4 bg-white hover:bg-blue-200 py-3 lg:py-6 px-6 lg:px-12 font-semibold clr-dark-blue lg:text-2xl rounded">Learn More</button>--}}
            </div>
        </div>
    </div>
</section>
