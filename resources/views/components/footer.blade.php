<footer>
    <div class=" relative mt-32  ">
        <img class="w-8 lg:w-auto absolute inset-0 m-auto mr-12 z-10 -mt-4 lg:-mt-8" src="https://cdn.tuk.dev/assets/templates/weCare/ball-large.png" />
{{--        <img src="https://i.ibb.co/fC8BBxt/footer-bg-wecare.png"  class="absolute inset-0 w-full   " style="object-fit: cover"/>--}}
        <div style="background-image: url('/storage/{{setting('fbackground')}}'); background-position: right">
        <div class="container relative z-10 mx-auto lg:flex justify-between px-6 pt-8 lg:pt-32 pb-6 lg:pb-28" >
            <div class=" ">
                <img class="mb-8 w-32" src="/storage/assets/logo.png" alt="logo" />
                <p class="text-white text-xl">{{setting('ftitle')}}</p>
            </div>
            <div class="lg:w-1/4 flex lg:justify-end items-end mt-12 lg:mt-0">
                @foreach(setting('links') as $item)
                    <div class=" p-2 rounded-full mr-2.5">
                        <a href="{{$item['url']}}" target="_blank">
                            <img src="/storage/{{$item['icon']}}"  />

                        </a>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    </div>
</footer>
