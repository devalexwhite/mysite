<section class="p-4 border-2 border-blue-50 w-full mt-8">
    <header class="mb-4">
        <h2 class="font-bold text-3xl mb-2 text-blue-50">was someone here today?</h2>
        <p class="font-light text-lg mb-8 text-blue-100">click if you're the first to the site today!</p>
        <button wire:click="setValue" class="border border-solid border-blue-50 text-white p-2 cursor-pointer">
            {{ $value ? '✅ someone was here' : '🙅‍♂️ nobody here today' }}
        </button>
        @if ($value)
            <p class="font-light text-sm mt-2 text-blue-100">
                the first visit was {{ $firstVisitTime->diffForHumans() }} ago!
            </p>
        @endif
    </header>
</section>