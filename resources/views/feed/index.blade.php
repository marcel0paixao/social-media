<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Social media | feed</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <div>
            <h1>Feed</h1>
            @foreach($posts as $post)
                <a href="{{route('post.show', $post->id)}}">
                    <div>
                        <div>
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->description}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
            <a href="{{ route('post.create') }}">
                <div>
                    <h2>Create post</h2>
                </div>
            </a>
        </div>
    </body>
</html>
