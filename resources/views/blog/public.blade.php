<x-public-layout>
    <x-slot name="title">
        Blog
    </x-slot>
    @foreach($posts as $post)
        <div class="flex flex-col items-center justify-center w-full">
            <h2>{{ $post->title }}</h2>
            <img src="{{ asset($post->image) }}" alt="{{ $post->image_alt }}" width="250">

            {{ $post->user->name }}

        </div>
    @endforeach
</x-public-layout>
