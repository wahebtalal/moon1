<section class="px-6 xl:px-0">
    <div class="mx-auto container mt-20">
        <div class="flex flex-col items-center justify-center w-full py-10">
            <h1 class="font-semibold bg-gold py-2 px-8 rounded-full   text-[30px]">{!! setting('social_name')??'مواقع التواصل' !!}</h1>
{{--            <hr class="w-24 h-1 bg-gold rounded-full" />--}}
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="w-10/12">
{{--                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 justify-center">--}}


                    <div class="bg-white w-full h-auto py-8 flex items-center justify-center gap-4 flex-wrap">

                        @foreach(setting('social') as $item)
                            <div class="w-12 h-12">
                                <x-dynamic-component
                                    :component="$item['name']"
                                    :url="$item['url']"
                                />
                            </div>

                        @endforeach

{{--                        <x-dynamic-component component="social.youtube"  />--}}



                    </div>


{{--                </div>--}}
            </div>
        </div>

    </div>
</section>


