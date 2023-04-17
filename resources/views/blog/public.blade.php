<x-public-layout>
   @foreach($posts as $post)
       <div class="flex flex-col items-center justify-center w-full">
           {{ $post->title }}

{{ $post->user->name }}

</div>
@endforeach
</x-public-layout>
