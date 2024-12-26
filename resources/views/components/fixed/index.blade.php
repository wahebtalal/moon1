<div class="fixed bottom-10 left-10 z-50 gap-1 flex-col flex">
    @foreach(setting('social') as $item)
        @if($item['name']==='social.whatsapp')

            <x-fixed.button :url="$item['url']"/>


{{--        @isset($item['fixed'])--}}


{{--        @if($item['fixed'])--}}
{{--            <div class="w-20 h-20">--}}
{{--                <x-dynamic-component--}}
{{--                    :component="$item['name']"--}}
{{--                    :url="$item['url']"--}}
{{--                />--}}
{{--            </div>--}}

{{--        @endif--}}
{{--            @endisset--}}
        @endif
    @endforeach
</div>
