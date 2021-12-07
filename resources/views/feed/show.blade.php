<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social media | feed</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            .hidden{
                display: none;
            }
        </style>
        
    </head>
    <body>
        <div class="p-6">
            <h1>Post ID: {{$post->id}}</h1>
                <div>
                    <div>
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->description}}</p>
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
                        <h2>delete</h2>
                    </button> 
                </div>
            </form>
                                
            <a href="{{ route('posts') }}">
                <div>
                    <h2>go back</h2>
                </div>
            </a>
        </div>
    </body>
</html>
