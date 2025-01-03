@php use App\Models\SocialMedia; @endphp
@aware(['page'])
@php
    $social=SocialMedia::all();

@endphp
<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-center w-full">
            <div class="w-10/12">
                {{--                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 justify-center">--}}


                <div class="bg-white w-full h-auto py-8 flex items-center justify-center gap-4 flex-wrap">

                    @foreach($social as $item)
                        {{--                        <div class="w-12 h-12">--}}
                        <button style="background-color:{{ hexToRgba($item->color, 0.05)}}; "
                                class="  p-5 cursor-pointer rounded-md shadow-md shadow-transparent transition-all duration-300 hover:shadow-indigo-200"
                                onclick="window.open('{{ $item->url }}', '_blank')">

                            <x-icon name="{{ $item->icon }}"
                                    class="w-12 h-12 justify-self-center"
                                    style="  color: {{ $item->color }}"/>
                            <span>
    {{$item->title}}
</span>
                        </button>
                    @endforeach


                </div>


            </div>
        </div>

    </div>
</div>
