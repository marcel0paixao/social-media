<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <a href="{{ route('post.create') }}" class="text-green-500">
                            <div>
                                <h2>Create post</h2>
                            </div>
                        </a>
                        @foreach($posts as $post)
                        <a href="{{route('post.show', $post->id)}}">
                            <div class="flex bg-white shadow-lg rounded-lg md:mx-4 my-4 md:mx-auto max-w-md max-w-2xl hover:bg-gray-100"><!--horizantil margin is just for display-->
                                <div class="flex items-start px-4 py-6">
                                    <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                    <div class="">
                                        <div class="flex items-center justify-between">
                                            <h2 class="text-lg font-bold text-gray-900 -mt-1">{{$post->user_name}}</h2>
                                            <small class="text-sm text-gray-700">22h ago</small>
                                        </div>
                                        <p class="text-gray-700 font-semibold">{{$post->title}}</p>
                                        <p class="mt-3 text-gray-700 text-sm">
                                            {{$post->description}}
                                        </p>
                                        <div class="mt-4 flex items-center">
                                            <div class="flex mr-2 text-gray-700 text-sm mr-3">
                                            <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                                </svg>
                                            <span>12</span>
                                            </div>
                                            <div class="flex mr-2 text-gray-700 text-sm mr-8">
                                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                            </svg>
                                            <span>8</span>
                                            </div>
                                            <div class="flex mr-2 text-gray-700 text-sm mr-4">
                                            <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                                                </svg>
                                            <span>share</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
