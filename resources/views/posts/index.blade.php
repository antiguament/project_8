

<x-layout meta-title="blog title" meta-description="blog description">



<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto">
        <!-- Título del blog -->
        <h2 class="text-4xl font-bold text-gray-800 mb-8">Blog</h2>

        <!-- Enlace para crear un nuevo post -->
        <a href="{{ route('posts.create') }}" class="inline-block bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 mb-8">
            Create New Post
        </a>

        <!-- Lista de posts -->
        <div class="space-y-6">
            @foreach ($posts as $post)
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-gray-800 hover:text-orange-500">
                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </h3>



<a href="{{ route('posts.edit', $post) }}">edit</a>


                </div>
            @endforeach
        </div>
    </div>
</div>










</x-layout>
    