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
        <h1>Create post</h1>
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
                    <form action="{{ route('post.store') }}" method="post">
                    @csrf
                        <div class="" style="width: 345px;">
                            <h2>Title:</h2>
                            <input type="text" name="title" class="border-1 sm:rounded-lg h-5">
                        </div>
                        <div class="">
                            <h2>Description:</h2>
                            <input type="textarea" name="description" placeholder="text">
                        </div>
                        <div class="">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
