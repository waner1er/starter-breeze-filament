<x-app-layout>
    @foreach($posts as $post)
        <div>
            <a href="{{ route('blog.edit', ['blog' => $post->slug]) }}">{{$post->title}}</a>
        </div>
    @endforeach
</x-app-layout>
