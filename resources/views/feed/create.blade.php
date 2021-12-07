<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="w-100 border-b-2 h-8 border-gray-400">
                        <a href="{{ route('posts') }}">
                            <i class="fas fa-chevron-left fa-lg inline-block"></i>
                            <span class="mb-2">Go back</span>
                        </a>
                    </div>
                    <div>
                        <h1 class="text-3xl m-6">Create a post</h1>
                        <div>
                            <div>
                            @if($errors->any())
                                <div>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form class="w-full w-100 max-w-sm" action="{{ route('post.store') }}" method="post">
                                @csrf
                                    <div class="md:flex md:items-center mb-6">
                                        <div class="md:w-1/3">
                                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-title">
                                            Title
                                        </label>
                                        </div>
                                        <div class="md:w-2/3">
                                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-title" type="text" name="title">
                                        </div>
                                    </div>
                                    <div class="md:flex md:items-center mb-6">
                                        <div class="md:w-1/3">
                                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-description">
                                            Description
                                        </label>
                                        </div>
                                        <div class="md:w-2/3">
                                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-description" type="textarea" name="description">
                                        </div>
                                    </div>
                                    <div class="md:flex md:items-center">
                                        <div class="md:w-1/3"></div>
                                        <div class="md:w-2/3">
                                        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                            Publish
                                        </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
        
    </body>