@php use App\Models\SocialMedia; @endphp
@aware(['page'])
@php
    $social=SocialMedia::where('floating',true)->get();

@endphp
<div class="fixed bottom-10 left-10 z-50 gap-1 flex-col flex  ">
    @foreach($social as $item)

{{--            <x-fixed.button :url="$item['url']"/>--}}


            <button style="background-color:{{ hexToRgba($item->color, 0.8)}}; "
                    class="  rounded-full p-5 cursor-pointer shadow-md shadow-transparent transition-all duration-300 hover:shadow-indigo-200"
                    onclick="window.open('{{ $item->url }}', '_blank')">

                <x-icon name="{{ $item->icon }}"
                        style="height: 30px; width: 30px; color: #ffffff"/>

            </button>

    @endforeach
</div>
