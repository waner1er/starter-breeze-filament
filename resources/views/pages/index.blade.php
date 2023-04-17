<x-public-layout>
    <div class="pages">
        @foreach($pages as $page)
            <div class="pages__item" data-expand-target>
                <a href="{{ route('pages.show', $page->slug) }}" data-expand-link>
                    {{ $page->title }}
                </a>
                {{ $page->content }}
            </div>
        @endforeach
    </div>
</x-public-layout>
