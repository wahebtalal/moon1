<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
    class="relative z-0"
>
    <div
        x-data="{ state: $wire.entangle('{{ $getStatePath() }}'), initialized: false }"
        x-load-js="[@js(\Filament\Support\Facades\FilamentAsset::getScriptSrc($getLanguageId(), 'mohamedsabil83/filament-forms-tinyeditor'))]"
        x-init="(() => {
            $nextTick(() => {
                tinymce.createEditor('tiny-editor-{{ $getId() }}', {
                    target: $refs.tinymce,
                    deprecation_warnings: false,
                    language: '{{ $getInterfaceLanguage() }}',
                    language_url: 'https://cdn.jsdelivr.net/npm/tinymce-i18n@23.7.24/langs5/{{ $getInterfaceLanguage() }}.min.js',
                    toolbar_sticky: {{ $getToolbarSticky() ? 'true' : 'false' }},
                    toolbar_sticky_offset: 64,
                    skin: {
                        light: 'oxide',
                        dark: 'oxide-dark',
                        system: window.matchMedia('(prefers-color-scheme: dark)').matches ? 'oxide-dark' : 'oxide',
                    }[typeof theme === 'undefined' ? 'light' : theme],
                    content_css: {
                        light: 'default',
                        dark: 'dark',
                        system: window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default',
                    }[typeof theme === 'undefined' ? 'light' : theme],
                    max_height: {{ $getMaxHeight() }},
                    min_height: {{ $getMinHeight() }},
                    menubar: {{ $getShowMenuBar() ? 'true' : 'false' }},
                    plugins: ['{{ $getPlugins() }}'],
                    external_plugins: @js($getExternalPlugins()),
                    toolbar: '{{ $getToolbar() }}',

{{--  toolbar: 'undo redo | styleselect | fontselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',--}}
   font_formats: `
        Noor=Noor;
        Cairo=Cairo, sans-serif;
        Tajawal=Tajawal, sans-serif;
        Noto Kufi Arabic=Noto Kufi Arabic, sans-serif;
        Reem Kufi=Reem Kufi, sans-serif;
        Andale Mono=andale mono,times;
        Arial=arial,helvetica,sans-serif;
        Arial Black=arial black,avant garde;
        Book Antiqua=book antiqua,palatino;
        Comic Sans MS=comic sans ms,sans-serif;
        Courier New=courier new,courier;
        Georgia=georgia,palatino;
        Helvetica=helvetica;
        Impact=impact,chicago;
        Oswald=oswald;
        Symbol=symbol;
        Tahoma=tahoma,arial,helvetica,sans-serif;
        Terminal=terminal,monaco;
        Times New Roman=times new roman,times;
        Trebuchet MS=trebuchet ms,geneva;
        Verdana=verdana,geneva;
        Webdings=webdings;
        Wingdings=wingdings,zapf dingbats;
    `,
         content_style: '@import url(\'https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Kufi+Arabic:wght@100..900&family=Reem+Kufi:wght@400..700&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap\')',
    toolbar_mode: 'sliding',
                    document_base_url: '{{ $getDocumentBaseUrl() }}',
                    relative_urls: {{ $getRelativeUrls() ? 'true' : 'false' }},
                    remove_script_host: {{ $getRemoveScriptHost() ? 'true' : 'false' }},
                    convert_urls: {{ $getConvertUrls() ? 'true' : 'false' }},
                    branding: false,
                    images_upload_handler: (blobInfo, success, failure, progress) => {
                        if (!blobInfo.blob()) return

                        $wire.upload(`componentFileAttachments.{{ $getStatePath() }}`, blobInfo.blob(), () => {
                            $wire.getFormComponentFileAttachmentUrl('{{ $getStatePath() }}').then((url) => {
                                if (!url) {
                                    failure('{{ __('Error uploading file') }}')
                                    return
                                }
                                success(url)
                            })
                        })
                    },
                    file_picker_callback: (cb, value, meta) => {
                        const input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.addEventListener('change', (e) => {
                            const file = e.target.files[0];
                            const reader = new FileReader();
                            reader.addEventListener('load', () => {
                                $wire.upload(`componentFileAttachments.{{ $getStatePath() }}`, file, () => {
                                    $wire.getFormComponentFileAttachmentUrl('{{ $getStatePath() }}').then((url) => {
                                        if (!url) {
                                            cb('{{ __('Error uploading file') }}')
                                            return
                                        }
                                        cb(url)
                                    })
                                })
                            });
                            reader.readAsDataURL(file);
                        });

                        input.click();
                    },
                    automatic_uploads: true,
                    templates: {{ $getTemplate() }},
                    setup: function(editor) {
                        if(!window.tinySettingsCopy) {
                            window.tinySettingsCopy = [];
                        }

                        if (!window.tinySettingsCopy.some(obj => obj.id === editor.settings.id)) {
                            window.tinySettingsCopy.push(editor.settings);
                        }

                        editor.on('blur', function(e) {
                            state = editor.getContent()
                        })

                        editor.on('init', function(e) {
                            if (state != null) {
                                editor.setContent(state)
                            }
                        })

                        editor.on('OpenWindow', function(e) {
                            target = e.target.container.closest('.fi-modal')
                            if (target) target.setAttribute('x-trap.noscroll', 'false')

                            target = e.target.container.closest('.jetstream-modal')
                            if (target) {
                                targetDiv = target.children[1]
                                targetDiv.setAttribute('x-trap.inert.noscroll', 'false')
                            }
                        })

                        editor.on('CloseWindow', function(e) {
                            target = e.target.container.closest('.fi-modal')
                            if (target) target.setAttribute('x-trap.noscroll', 'isOpen')

                            target = e.target.container.closest('.jetstream-modal')
                            if (target) {
                                targetDiv = target.children[1]
                                targetDiv.setAttribute('x-trap.inert.noscroll', 'show')
                            }
                        })

                        function putCursorToEnd() {
                            editor.selection.select(editor.getBody(), true);
                            editor.selection.collapse(false);
                        }

                        $watch('state', function(newstate) {
                            // unfortunately livewire doesn't provide a way to 'unwatch' so this listener sticks
                            // around even after this component is torn down. Which means that we need to check
                            // that editor.container exists. If it doesn't exist we do nothing because that means
                            // the editor was removed from the DOM
                            if (editor.container && newstate !== editor.getContent()) {
                                editor.resetContent(newstate || '');
                                putCursorToEnd();
                            }
                        });
                    },
                    {{ $getCustomConfigs() }}
                }).render();
            });

            // We initialize here because if the component is first loaded from within a modal DOMContentLoaded
            // won't fire and if we want to register a Livewire.hook listener Livewire.hook isn't available from
            // inside the once body
            if (!window.tinyMceInitialized) {
                window.tinyMceInitialized = true;
                $nextTick(() => {
                    Livewire.hook('morph.removed', (el, component) => {
                        if (el.el.nodeName === 'INPUT' && el.el.getAttribute('x-ref') === 'tinymce') {
                            tinymce.get(el.el.id)?.remove();
                        }
                    });
                });
            }
        })()"
        x-cloak
        class="overflow-hidden"
        wire:ignore
    >
        @unless($isDisabled())
            <input
                id="tiny-editor-{{ $getId() }}"
                type="hidden"
                x-ref="tinymce"
                placeholder="{{ $getPlaceholder() }}"
            >
        @else
            <div
                x-html="state"
                @style([
                    'max-height: '.$getPreviewMaxHeight().'px' => $getPreviewMaxHeight() > 0,
                    'min-height: '.$getPreviewMinHeight().'px' => $getPreviewMinHeight() > 0,
                ])
                class="block w-full max-w-none rounded-lg border border-gray-300 bg-white p-3 opacity-70 shadow-sm transition duration-75 prose dark:prose-invert dark:border-gray-600 dark:bg-gray-700 dark:text-white overflow-y-auto"
            ></div>
        @endunless
    </div>
</x-dynamic-component>
