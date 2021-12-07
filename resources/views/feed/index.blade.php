<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 bg-gray-200">
                    <div>
                        <a href="{{ route('post.create') }}" class="text-green-500">
                            <div class="border-2 hover:border-green-500 inline p-2 rounded-lg bg-white shadow">
                                <i class="fas fa-plus"></i> <span>Create post</span>
                            </div>
                        </a>
                        @foreach($posts as $post)
                            @include('feed.post', ['show' => false])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
