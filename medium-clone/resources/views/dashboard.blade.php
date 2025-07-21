<x-app-layout>
    <div class="py-4">
        <div class="">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                <li class="me-2">
                    <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active" aria-current="page">All</a>
                </li>
                @foreach ($categories as $category)
                    <li class="me-2">
                        <a href="#" class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="py-6 px-6 bg-green-100 mt-12 max-w-3xl mx-auto rounded-lg">
            <!-- <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center"> -->
                @forelse ($posts as $post)
                    <x-post-item :post="$post"></x-post-item>
                @empty
                    <div class="text-center text-gray-400 py-16">No posts found</div>
                @endforelse
                <!-- Pagination controls -->
                <div class="mt-6">
                    {{ $posts->onEachSide(1)->links() }}
                </div>
            <!-- </ul> -->
        </div>
    </div>
</x-app-layout>
