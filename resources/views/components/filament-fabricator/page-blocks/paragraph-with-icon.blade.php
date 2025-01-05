@aware(['page'])
<div class="flex  items-start   ">
    <img class="w-8 sm:ml-5 m-1" src="/storage/{{$icon}}" alt="quotation" />
    <div class="   text-center ">

        {!! tiptap_converter()->asHTML( $text ) !!}
    </div>
</div>
