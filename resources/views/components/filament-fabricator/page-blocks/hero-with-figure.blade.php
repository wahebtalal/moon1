@aware(['page'])
<div class="hero bg-base-200  py-20 ">
    <div class="hero-content flex-col lg:flex-row">
        <img
            src="{{asset($image)}}"
            class="max-w-sm rounded-lg shadow-2xl"  alt=""/>
        <div  dir="rtl">
            <h1 class="text-5xl font-bold"> {{$title}}</h1>
            <p class="py-6">
            {{$description}}
            </p>
            @if($active)
                <a href="{{$buttonurl}}">
                    <button class="btn btn-primary">{{$buttontext}}}</button>

                </a>
            @endif
        </div>
    </div>
</div>
