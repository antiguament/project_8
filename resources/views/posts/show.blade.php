



<x-layout :meta-title="$post->title" :meta-description="$post->title">
   
    <div class="min-h-screen bg-gray-100 p-6">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            <!-- Título del post -->
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
    
            <!-- ID del post -->
            <p class="text-lg text-gray-600 mb-8">Post ID: {{ $post->id }}</p>
    
            <!-- Enlace "Back" -->
            <a href="{{ route('posts.index') }}" class="inline-block bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
                Back
            </a>
        </div>
    </div>
    

    </x-layout>
    