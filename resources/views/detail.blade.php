<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <article class="prose lg:prose-xl mx-auto">
        <h2 class="text-2xl font-bold">{{ $b->title }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $b->penulis }}</a>
        </div>
        <p>{{ $b->content }}</p>
        <a href="#" class="text-blue-500 hover:underline">&laquo; Back;</a>
    </article>
</x-layout>
