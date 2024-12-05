@aware(['page'])
@php
    $pages=   \Z3d0X\FilamentFabricator\Models\Page::all();// orderBy('id','desc')->get();
//    $mainPage=$pages->firstWhere('slug','/');

   // dd($mainPage);
@endphp
<div class="navbar bg-base-100 glass rounded-b-xl mx-auto    ">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </div>
            <ul
                tabindex="0"
                class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                @foreach($pages as $child)
                    <li class="m-1" ><a
                            @class(['bg-gray-200'=>request()->is($child->slug)])
                            href="{{$child->slug}}">{{$child->title}}</a></li>
                @endforeach

            </ul>
        </div>

    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
                @foreach($pages as $child)
                <li class="m-1" ><a
                        @class(['bg-gray-200'=>request()->is($child->slug)])
                        href="{{$child->slug}} ">{{$child->title}}</a></li>
            @endforeach






{{--            <li><a>Item 3</a></li>--}}
        </ul>
    </div>
    <div class="navbar-end">
        <a class="btn btn-ghost text-xl" href="/">
            <img class="w-32    " src="{{asset('assets/logo.png')}}" alt="">
        </a>
    </div>
</div>
