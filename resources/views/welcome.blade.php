<x-layout>
    <section class="p-4 border-2 border-blue-50 w-full mt-8">
        <header class="mb-4">
            <h2 class="font-bold text-3xl mb-8 text-blue-50">recent articles.</h2>
            <livewire:articles-list lazy-load="true" perPage="5" />
        </header>
    </section>
</x-layout>