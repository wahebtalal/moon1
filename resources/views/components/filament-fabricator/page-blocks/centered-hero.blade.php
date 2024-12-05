@aware(['page'])
<div class="hero   py-20 ">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold">{{$title}}</h1>
            <p class="py-6">
              {{$content}}
            </p>
            @if($active)
                <a href="{{$buttonurl??'#'}}">


            <button class="btn btn-primary">

                {{$buttontext??''}}
            </button>
                </a>
            @endif
        </div>
    </div>
</div>
