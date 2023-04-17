<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a post') }}
        </h2>
    </x-slot>

    {{ $post->title }}
    {{ $post->slug }}
    {{ $post->excerpt }}
    {{ $post->content }}
    <img src="{{ asset($post->image) }}" alt="{{ $post->image_alt }}">
    {{ $post->user->name }}
    {{ $post->category->name }}

</x-app-layout>
