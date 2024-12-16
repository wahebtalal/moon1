<section class="px-6 xl:px-0">
    <div class="container mx-auto  ">
        <div class="flex flex-col items-center justify-center w-full py-10">
            <h1 class="font-semibold bg-gold py-2 px-8 rounded-full text-blue-800  text-40px">خدماتنا</h1>
{{--            <hr class="w-24 h-1 bg-gold rounded-full" />--}}
        </div>

        <div class="lg:grid lg:grid-cols-3 gap-10 items-center justify-between lg:-mx-5">
            @foreach(setting('service') as $item)
                @if($item['featured'])
                    <div class="">
                        <div class="bg-gold shadow-lg text-white flex justify-center items-center flex-col border-gray rounded-md p-8">
                            <img class="mb-4" src="/storage/{{$item['icon']}}" />
                            <h2 class="text-2xl font-bold mb-6 text-white text-center lg:text-left">{{$item['title']}}</h2>
                            <p class="lg:w-2/3 mb-6 text-center text-white">{{$item['description']}}</p>
                        </div>
                    </div>
                @else
                    <div class=" ">
                        <div class="bg-white flex justify-center items-center flex-col border-gray rounded-md p-8">
                            <img class="mb-4" src="/storage/{{$item['icon']}}" />
                            <h2 class="text-2xl font-bold mb-6 clr-dark-blue text-center lg:text-left">{{$item['title']}}</h2>
                            <p class="lg:w-2/3 mb-6 text-center">{{$item['description']}}</p>
                        </div>
                    </div>
                @endif
            @endforeach



        </div>
    </div>
</section>
