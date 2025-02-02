<x-app-layout>
    @props(['post'])
    <main class="container mx-auto px-5 flex flex-grow">
        <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
            <img class="w-full my-2 rounded-lg" src="{{$post->image }}" alt="Thumbnail for Post">
            <h1 class="text-xl font-bold text-left text-gray-800" style="text-transform:uppercase font-size:10vw">
              {{$post->title}}
            </h1>
            <div class="mt-2 flex justify-between items-center">
                <div class="flex py-5 text-base items-center">
                    <img class="w-10 h-10 rounded-full mr-3" src="{{$post->author->profile_photo_url }}"
                        alt="avatar">
                    <span class="mr-1" style="padding: 3px"> {{ $post->author->name }}  </span>
                    <span class="text-gray-500 text-sm"> | {{$post->getReadingTime()}} min reading</span>
                </div>
                <div class="flex items-center">
                    <span class="text-gray-500 mr-2">{{$post->published_at}}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                        stroke="currentColor" class="w-5 h-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>

            <div class="article-content py-3 text-gray-800 text-lg text-justify">
               {{$post->body}}
            </div>

        </article>
    </main>

</x-app-layout>
