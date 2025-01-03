@aware(['page'])

<div class="flex justify-center my-10">
    <div class="bg-[#262262] flex bg-opacity-95 shadow-none transition-all duration-200 cursor-pointer hover:shadow-lg hover:scale-[1.009] hover:shadow-gray-400 rounded-3xl justify-center items-center flex-col border-gray p-8 w-[350px]  ">
        <div class="flex items-center justify-center aspect-square p-2">
            <img class="mask mask-squircle object-scale-down h-[114px] w-[114px]" src="{{ Storage::url($icon) }}" alt="Icon" />
        </div>
        <h2 class="text-2xl font-bold text-yellow-500 mb-6 text-center break-words py-8">
            {!! $title !!}
        </h2>
        <p class="w-full text-white text-center mb-6 break-words leading-relaxed">
            {!! $description !!}
        </p>
    </div>
</div>
{{--<div class="flex flex-col rounded-2xl w-[450px] bg-[#262262] shadow-xl">--}}
{{--    <figure class="flex justify-center items-center rounded-2xl">--}}
{{--                    <img class="object-scale-down h-[114px] w-[114px]" src="{{ Storage::url($icon) }}" alt="Icon" />--}}
{{--    </figure>--}}
{{--    <!---->--}}
{{--    <div class="flex flex-col p-8">--}}
{{--        <div class="text-2xl font-bold  text-center text-[#ffffff] pb-6">     {{$title }}</div>--}}
{{--        <div class=" text-lg  text-center text-[#ffffff]"> {{ $description }}</div>--}}
{{--        <!---->--}}
{{--    </div>--}}
{{--</div>--}}
