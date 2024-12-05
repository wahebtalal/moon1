@php use Z3d0X\FilamentFabricator\Facades\FilamentFabricator; @endphp
@props(['page','mobile'])



@php

@endphp

{{--@dd($mobile)--}}

@if(count($page->children))
    @if($mobile)
        <li>

        <li><a
                @class(['bg-gray-200'=>request()->is($page->slug)])


                href="{{'/'.  $page->slug}}">{{$page->title}}</a></li>
            <ul class="p-2">
                @foreach($page->children as $child)

                    <li><a
                            @class(['bg-gray-200'=>request()->is($page->slug.'/'.$child->slug)])

                            href="{{'/'.$page->slug.'/'.$child->slug}}">{{$child->title}}</a></li>

                @endforeach

            </ul>
        </li>
    @else
    <li class="m-1" >
        <div  @class(['bg-base-200'=>request()->is($page->slug),'dropdown dropdown-hover dropdown-bottom dropdown-end  ']) >
     <a tabindex="0"  class=" "    role="button"  href="{{'/'.$page->slug}}">{{$page->title}}</a>
            <ul tabindex="1" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                @foreach($page->children as $child)

                    <li><a
                            @class(['bg-gray-200'=>request()->is($page->slug.'/'.$child->slug)])

                            href="{{'/'.$page->slug.'/'.$child->slug}}">{{$child->title}}</a></li>

                @endforeach
            </ul>
        </div>
    </li>

    @endif
@else
    <li class="m-1" ><a
            @class(['bg-gray-200'=>request()->is($page->slug)])
        href="{{'/'.$page->slug}}">{{$page->title}}</a></li>

@endif

