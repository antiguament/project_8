<x-layout meta-title="blog" meta-description="blog description">


<h2>Blog</h2>

@foreach ($posts as $post)

<h3>
    <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
</h3>


@endforeach

</x-layout>
    