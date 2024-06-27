@props(['post'])
    <div class="mb-8" style="margin-right: 15px; margin-bottom: 15px;">
        <a href="#" class="block">
            <div class="overflow-hidden rounded-xl">
                <img class="w-full rounded-lg "
                    src="{{ $post->image }}" alt="Post image">
            </div>
        </a>
        <div class="mt-3">
            <div class="flex items-center mb-2">
                <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
            </div>
            <a href="#" class="block text-xl font-bold text-gray-900">{{ $post->title }}</a>
        </div>
    </div>
