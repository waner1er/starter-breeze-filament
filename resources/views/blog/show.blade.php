<x-public-layout>
    <x-slot name="title">
        {{ $blog->title }}
    </x-slot>
    {{ $blog->content }}
</x-public-layout>
