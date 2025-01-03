@aware(['page'])
<div class="flex  items-start   ">
    <img class="w-8 m-10 " src="/storage/{{$icon}}" alt="quotation" />
    <div class=" leading-7 mt-5 text-center ">

        {!! tiptap_converter()->asHTML( $text ) !!}
    </div>
</div>
