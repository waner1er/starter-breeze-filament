<x-app-layout>
    @foreach($posts as $post)
        <div>
            <a href="{{ route('blog.edit', ['blog' => $post->slug]) }}">{{$post->title}}</a>
        </div>

       <img src="{{ asset($post->image) }}" alt="{{ $post->image_alt }}" width="250">
    @endforeach
</x-app-layout>
