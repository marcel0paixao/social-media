@php 
    $showPost = isset($show) && $show ? true : false;
@endphp

@if($showPost)
    <div class="w-100 border-b-2 h-8 border-gray-400">
        <a href="{{ route('posts') }}">
            <i class="fas fa-chevron-left fa-lg inline-block"></i>
            <span class="mb-2">Go back</span>
        </a>
    </div>
@endif
<div class="flex bg-white @if(!$showPost) cursor-pointer shadow-lg hover:bg-gray-100 @endif rounded-lg md:mx-4 my-4 md:mx-auto max-w-md max-w-2xl" @if(!$showPost) onClick="window.location.href= '{{ route('post.show', $post->id) }}'" @endif id="card"><!--horizantil margin is just for display-->
    <div class="flex items-start px-4 py-4">
        <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
        <div class="">
            @if($showPost && $errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="flex items-center justify-left">
                <h2 class="text-lg font-bold text-gray-900 -mt-1">{{$post->user_name}}</h2>
                <small class="text-sm text-gray-700 ml-3">22h ago</small>
                <!-- Settings Dropdown -->
                
                @if($post->user_id == $user->id)
                <div class="hidden sm:flex sm:items-center ml-auto">
                    <x-dropdown align="right" width="48"> 
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-black hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <i class="fas fa-ellipsis-v fa-lg cursor-pointer" onClick="document.getElementById('card').onClick = ''"></i>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link class="cursor-pointer" onclick="event.preventDefault()
                                    document.getElementById('edit-form').classList = ''">
                                <i class="fas fa-edit"></i> {{ __('Edit') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('post.delete', $post->id) }}" id="delete-form">
                            @csrf
                            {{ method_field('DELETE') }}
                                <x-dropdown-link :href="route('post.delete', $post->id)"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fas fa-trash-alt text-red-500"></i> {{ __('Delete') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endif
                
            </div>

            <p class="text-gray-700 font-semibold">{{$post->title}}</p>
            <p class="mt-3 text-gray-700 text-sm">
                {{$post->description}}
            </p>
            <div class="p-2">
                <div>
                    <form action="{{ route('post.edit', $post->id) }}" id="edit-form" class="hidden" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <input type="text" name="title" id="title" value="{{old('title') ?? $post->title}}">
                        <input type="text" name="description" value="{{old('description') ?? $post->description}}">
                        <input type="submit" value="submit">
                        <a onclick="document.getElementById('edit-form').classList = 'hidden'" style="cursor: pointer">X</a>
                    </form>
                </div>
            </div>
            <div class="mt-4 flex items-center">
                <div class="flex mr-2 text-gray-700 text-sm mr-3">
                    <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                    <span>12</span>
                </div>
                <div class="flex mr-2 text-gray-700 text-sm mr-3">
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