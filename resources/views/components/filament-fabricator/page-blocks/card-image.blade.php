{{--@aware(['page'])--}}
{{--@isset($url)--}}
{{--    <a href="{{$url??'#'}}"  class="card bg-base-100 w-96   shadow-xl transition-all duration-300">--}}

{{--@else--}}
{{--            <div   class="card bg-base-100 w-96   shadow-xl transition-all duration-300">--}}

{{--            @endisset--}}
{{--    <figure>--}}
{{--        <img--}}
{{--            class="w-full h-auto relative z-0    transition-all duration-300 hover:scale-110"--}}
{{--            src="/storage/{{$icon}}"--}}
{{--            alt="Shoes" />--}}
{{--    </figure>--}}
{{--    <div class="card-body items-center text-center">--}}
{{--        <h2 class="card-title">{!! $title!!}</h2>--}}
{{--        <p>{!! $description!!}</p>--}}

{{--    </div>--}}

{{--    @isset($url)--}}
{{--    </a>--}}
{{--    @else--}}
{{--            </div>--}}
{{--    @endisset--}}
@aware(['page'])

@isset($url)
    <a href="{{ $url ?? '#' }}" class="card    shadow-md transition-all duration-300
      @if($imagehovereffect == 'shadow')
      hover:shadow-xl
      @endif
    "
       style="background-color: {{ $cardbackgroundcolor}}; border-radius: {{ $cardborderradius }}px; border: 2px solid {{ $cardbordercolor }};">
        @else
            <div class="card bg-base-100  shadow-md transition-all duration-300
                @if($imagehovereffect == 'shadow')
      hover:shadow-xl
      @endif
            "
                 style="background-color: {{ $cardbackgroundcolor }}; border-radius: {{ $cardborderradius }}px; border: 2px solid {{ $cardbordercolor }};">
                @endisset

                <figure>
                    <img class="w-full h-auto relative z-0 transition-all duration-300
            @if($imagehovereffect == 'zoom') hover:scale-110

            @endif"
                         src="/storage/{{ $icon }}" alt="{{ $title }}"
                         @if($imagewidth) style="width: {{ $imagewidth }}px;" @endif
                         @if($imageheight) style="height: {{ $imageheight }}px;" @endif />
                </figure>

                <div class="card-body items-center text-center">
                    <h2 class="card-title">{!! $title !!}</h2>
                    <p>{!! $description !!}</p>
                </div>

            @isset($url)
    </a>
    @else
        </div>
@endisset
