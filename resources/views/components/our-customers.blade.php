<section class="px-6 xl:px-0">
    <div class="mx-auto container mt-20">
        <div class="flex flex-col items-center justify-center w-full py-10">
            <h1 class="font-semibold bg-gold py-2 px-8 rounded-full    text-40px">{!! setting('customer_name')??'عملاءنا' !!}</h1>
{{--            <hr class="w-24 h-1 bg-gold rounded-full" />--}}
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="w-10/12">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 justify-center">

                    @foreach(setting('customer') as $item)
{{--                        <div class="flex flex-col items-center justify-center">--}}
{{--                            @isset($item['icon'])--}}
{{--                                <img class="-ml-4" src="/storage/{{$item['icon']}}" alt="team 1" />--}}

{{--                            @endisset--}}
{{--                            <h2 class="text-2xl font-medium mt-6">{!! $item['title']!!}</h2>--}}
{{--                            <h3 class="text-lg">{!! $item['description']!!}</h3>--}}
{{--                        </div>--}}
{{--                        <div class="card bg-base-100 w-96 shadow-xl">--}}
{{--                            <figure class="px-10 pt-10">--}}
{{--                                <img--}}
{{--                                    src="/storage/{{$item['icon']}}"--}}
{{--                                    alt="Shoes"--}}
{{--                                    class="rounded-xl" />--}}
{{--                            </figure>--}}
{{--                            <div class="card-body items-center text-center">--}}
{{--                                <h2 class="card-title">{!! $item['title']!!}</h2>--}}
{{--                                <p>{!! $item['description']!!}</p>--}}

{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="card bg-base-100 w-96   shadow-xl transition-all duration-300">
                            <figure>
                                <img
                                    class="w-full h-auto relative z-0   transition-all duration-300 hover:scale-110"
                                    src="/storage/{{$item['icon']}}"
                                    alt="Shoes" />
                            </figure>
                            <div class="card-body items-center text-center">
                                <h2 class="card-title">{!! $item['title']!!}</h2>
                                <p>{!! $item['description']!!}</p>

                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </div>
</section>
