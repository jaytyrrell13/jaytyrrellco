<div class="flex flex-col mb-12">
    <h5 class="mb-0">{{ date('m/d/Y', $post->date) }} <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="font-bold ml-4">{{ $post->title }}</a></h5>
</div>
