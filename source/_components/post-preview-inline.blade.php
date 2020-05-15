<div class="flex flex-col mb-4">
    <h5 class="mb-0"><a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="font-bold">{{ $post->title }}</a></h5>

    <p>{!! $post->getExcerpt(200) !!}</p>
</div>
