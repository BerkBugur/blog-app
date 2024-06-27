<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<x-app-layout>
    @props(['post'])
    <main class="container mx-auto px-5 flex flex-grow">
        <div class="w-full grid grid-cols-4 gap-10">
            <div class="md:col-span-3 col-span-4">
                <div id="posts" class=" px-3 lg:px-7 py-6">
                    <div class="flex justify-between items-center border-b border-gray-100">

                    </div>
                    <div class="py-4">
                        @if ($posts->isEmpty())
                            <p>There are no posts yet.</p>
                        @else
                            @foreach ($posts as $post)
                                <x-posts.post-item :post="$post" />
                            @endforeach
                            <div class="my-3">
                                {{ $posts->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div id="side-bar"
                class="border-t border-t-gray-100 md:border-t-none col-span-4 md:col-span-1 px-3 md:px-6  space-y-10 py-6 pt-10 md:border-l border-gray-100 h-screen sticky top-0">
                <div id="search-box">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Search</h3>
                        <div class="w-52 flex rounded-2xl bg-gray-100 py-2 px-3 mb-3 items-center">
                            <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                            <input
                                class="w-40 ml-1 bg-transparent focus:outline-none focus:border-none focus:ring-0 outline-none border-none text-xs text-gray-800 placeholder:text-gray-400"
                                type="text" placeholder="Search Posts">
                        </div>
                    </div>
                </div>
                @auth()


                <div id="recommended-topics-box">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Share post with us</h3>
                    <div class="topics flex flex-wrap justify-start">
                        <a href="http://127.0.0.1:8000/create" class="bg-yellow-500
                                        text-white
                                        rounded-xl px-3 py-1 text-base"style="
                                        color: white;
                                        border-radius: 8px;
                                        padding: 12px 24px;
                                        font-size: 22px;">
                            Create Blog</a>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </main>

</x-app-layout>
