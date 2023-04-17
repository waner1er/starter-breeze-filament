<x-public-layout>
    <x-slot name="title">
        {{ $page->title }}
    </x-slot>
    <x-slot name="metaKeyWords">
        {{ $page->meta_keywords }}
    </x-slot>
    <x-slot name="metaDescription">
        {{ $page->meta_description }}
    </x-slot>

    <h1> {{ $page->title }}</h1>
    {{ $page->content }}

</x-public-layout>
