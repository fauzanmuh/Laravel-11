<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}

    @foreach ($data as $b)
    <article class="prose lg:prose-xl mx-auto">
        <h2 class="text-2xl font-bold">{{ $b->title }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $b->penulis }}</a>
        </div>
        <p>{{Str::limit($b->content, 100)}}</p>
        <a href="/blog/detail/{{ $b->id }}" class="text-blue-500 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>
