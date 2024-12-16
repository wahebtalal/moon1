<section class="px-6 xl:px-0">
    <div class="mx-auto container mt-20">
        <div class="flex flex-col items-center justify-center w-full py-10">
            <h1 class="font-semibold bg-gold py-2 px-8 rounded-full text-blue-800  text-40px">عملاءنا</h1>
{{--            <hr class="w-24 h-1 bg-gold rounded-full" />--}}
        </div>
        <div class="flex items-center justify-center w-full">
            <div class="w-10/12">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 justify-center">

                    @foreach(setting('customer') as $item)
                        <div class="flex flex-col items-center justify-center">
                            @isset($item['icon'])
                                <img class="-ml-4" src="/storage/{{$item['icon']}}" alt="team 1" />

                            @endisset
                            <h2 class="text-2xl font-medium mt-6">{{$item['title']}}</h2>
                            <h3 class="text-lg">{{$item['description']}}</h3>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>

    </div>
</section>
