<div>
    <ul class="flex flex-col gap-2 mt-8">
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', ['article' => $article]) }}" class="text-white font-bold">
                    <span
                        class="font-light text-blue-200 w-32 inline-block pr-4">{{ $article->created_at->diffForHumans() }}</span>
                    <span class="underline">{{ $article->title }}</span>
                </a>
            </li>
        @endforeach
        @if(count($articles) === 0)
            <li>No new articles available.</li>
        @endif

    </ul>
    <footer class="flex items-center gap-4 w-full mt-8">
        @if($page > 1)

            <button wire:click="pageBack" class="text-blue-200 underline hover:text-blue-400 cursor-pointer">
                ⬅️ Previous
            </button>

        @endif
        @if(!$lastPage)

            <button wire:click="pageForward" class="text-blue-200 underline hover:text-blue-400 cursor-pointer">
                Next Page ▶️
            </button>

        @endif
    </footer>
</div>