<x-layout>
    <div class="text-white">

        <header>
            <h1 class="text-3xl font-bold mb-3">{{ $article->title }}</h1>
        </header>
        <div class="prose md:prose-xl">
            {!!   $article->content   !!}
        </div>
    </div>

</x-layout>