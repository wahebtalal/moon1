<x-filament-tiptap-editor::dropdown-button
    label="fontFamily"
    active="fontFamily"
{{--    action="editor().commands.toggleHero()"--}}
>

    <button @click="editor.commands.setFontFamily('Inter')" :class="{ 'is-active': editor.isActive('textStyle', { fontFamily: 'Inter' }) }">
        Inter
    </button>
    <button @click="editor.commands.setFontFamily('Comic Sans MS, Comic Sans')" :class="{ 'is-active': editor.isActive('textStyle', { fontFamily: 'Comic Sans MS, Comic Sans' }) }">
        Comic Sans
    </button>
    <button @click="editor.chain().focus().setFontFamily('serif').run()" :class="{ 'is-active': editor.isActive('textStyle', { fontFamily: 'serif' }) }">
        Serif
    </button>
    <button @click="editor.chain().focus().setFontFamily('monospace').run()" :class="{ 'is-active': editor.isActive('textStyle', { fontFamily: 'monospace' }) }">
        Monospace
    </button>
    <button @click="editor.chain().focus().setFontFamily('cursive').run()" :class="{ 'is-active': editor.isActive('textStyle', { fontFamily: 'cursive' }) }">
        Cursive
    </button>
    <button @click="editor.chain().focus().unsetFontFamily().run()">
        Unset font family
    </button>
</x-filament-tiptap-editor::dropdown-button>
{{--<div>--}}
{{--    <div  class="container">--}}
{{--        <div class="control-group">--}}
{{--            <div class="button-group">--}}
{{--               --}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <editor-content :editor="editor" />--}}
{{--    </div>--}}
{{--</div>--}}
