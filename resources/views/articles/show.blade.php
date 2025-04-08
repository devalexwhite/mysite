<x-layout>
    <div class="text-white">

        <header>
            <h1 class="text-6xl font-bold mb-8">{{ $article->title }}</h1>
        </header>
        <div class="prose md:prose-xl prose-invert">
            {!!   $article->content   !!}
        </div>
    </div>

</x-layout>