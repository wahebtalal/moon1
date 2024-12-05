<section class="px-6 xl:px-0">
    <div class="   mx-auto container">
        <div class="flex flex-col lg:items-center justify-center w-full py-10">
            <h1 class="font-semibold custom-gray-800 text-40px">اهدافنا</h1>
{{--            <p class="mt-2.5 lg:w-2/5 lg:text-center text-2xl custom-gray-800">More than 1000 users are satisfied with our services and want to share their experience with you</p>--}}
        </div>
        <div class=" flex items-center justify-center w-full">
            <div class="w-10/12">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                 @foreach(setting('goal') as $item)
                        <div class="flex  items-center justify-center">
                            <img class="w-8 " src="/storage/{{$item['icon']}}" alt="quotation" />
                            <p class="text-base custom-gray-800 leading-7 mt-5 text-center w-8/12">{{$item['goal']}}</p>
                        </div>
                 @endforeach


                </div>
            </div>
        </div>
    </div>
</section>
