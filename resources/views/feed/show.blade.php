<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-5">
                        <div>
                            <h2>Title: {{$post->title}}</h2>
                            <p>Description: {{$post->description}}</p>
                            <p>By: {{$post->user_name}}</p>
                            @if($errors->any())
                            <div>
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('post.edit', $post->id) }}" id="edit-form" class="hidden" method="post">
                                @csrf
                                {{ method_field('PUT') }}
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" value="{{old('title')}}">
                                <label for="description">Description</label>
                                <input type="text" name="description" value="{{old('description')}}">
                                <input type="submit" value="submit">
                                <a onclick="document.getElementById('edit-form').classList = 'hidden'" style="cursor: pointer">X</a>
                            </form>
                        </div>
                    </div>
                    <a onclick="document.getElementById('edit-form').classList = ''">
                        <div>
                            <h2>edit</h2>
                        </div>
                    </a>
                    <form action="{{ route('post.delete', $post->id) }}" id="delete-form" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <div>
                            <button type="submit">
                                <h2 class="text-red-500">delete</h2>
                            </button> 
                        </div>
                    </form>                        

                    <a href="{{ route('posts') }}">
                        <div>
                            <h2>go back</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
