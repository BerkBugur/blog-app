<x-app-layout>
    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-4xl text-yellow-500 font-bold">All Posts</h2>
            <div class="w-full">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    @foreach ($posts as $post )
                    <x-posts.post-item :post="$post"/>
                    @endforeach

                </div>
            </div>
                {{ $posts->links() }}

        </div>
    </div>
</x-app-layout>
