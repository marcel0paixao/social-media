<!-- Scripts -->
<script src="{{ asset('js/posts.js') }}" defer></script>

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/posts.css') }}"/>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 bg-gray-200">
                    @include('feed.post', ['show' => true])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
