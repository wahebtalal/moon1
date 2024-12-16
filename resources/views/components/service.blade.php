<section class="px-6 xl:px-0">
    <div class="container mx-auto  ">
        <div class="flex flex-col items-center justify-center w-full py-10">
            <h1 class="font-semibold bg-gold py-2 px-8 rounded-full    text-40px">خدماتنا</h1>
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
                    <div class="flex justify-center h-full my-10">
                        <div class="bg-[#262262] flex bg-opacity-95 shadow-none transition-all duration-200 cursor-pointer hover:shadow-lg hover:scale-[1.009] hover:shadow-gray-400 rounded-3xl justify-center items-center flex-col border-gray  p-8 w-full max-w-md lg:max-w-lg">
                            <div class=" flex items-center justify-center aspect-square  p-2  ">
                                <img class="object-scale-down  h-[114px] w-[114px] " src="/storage/{{$item['icon']}}" alt="Icon" />
                            </div>
                            <h2 class="text-2xl font-bold text-yellow-500 mb-6 text-center break-words  py-8">
                                {{$item['title']}}
                            </h2>
                            <p class="w-full text-white text-center mb-6 break-words leading-relaxed ">
                                {{$item['description']}}
                            </p>
                        </div>
                    </div>

                @endif
            @endforeach



        </div>
    </div>
</section>
