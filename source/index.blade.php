@extends('_layouts.master')

@section('body')

<div class="bg-gray-050 py-8 border-b border-gray-100 mb-8">
    <div class="flex max-w-3xl mx-auto">
        <div class="mr-8">
            <img src="/assets/images/headshot.jpg" alt="Picture of Jay Tyrrell" class="rounded-full border-4 border-white" height="280" width="280">
        </div>
        <div>
            <h2 class="leading-none">Welcome!</h2>

            <p>I'm Jay Tyrrell, a software engineer at <a href="https://www.ableto.com/" target="_blank">AbleTo</a>. We are a leading provider of virtual behavioral health care.</p>

            <p>I primarily work in PHP using the <a href="https://laravel.com/" target="_blank">Laravel</a> framework and Javascript using <a href="https://vuejs.org/" target="_blank">Vue.js</a>.</p>

            <p class="mb-0"><a href="#">Learn More</a></p>
        </div>
    </div>
</div>

<div class="max-w-3xl mx-auto">
    <h3>Latest Articles</h3>

    @foreach ($posts->take(6)->chunk(2) as $row)
        @foreach ($row as $post)
            @include('_components.post-preview-inline')

            @if (! $loop->last)
                <hr class="block md:hidden w-full border-b mt-2 mb-6">
            @endif
        @endforeach

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
</div>
@stop
