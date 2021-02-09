@extends('_layouts.master')

@section('hero')
    <h2 class="mb-0">Welcome</h2>
@endsection

@section('body')
    <div class="block md:flex md:items-center">
        <div class="mb-8 md:mr-8 md:mb-0">
            <img src="/assets/images/headshot.jpg" alt="Picture of Jay Tyrrell" class="rounded-full mx-auto w-40 md:w-64 h-auto">
        </div>
        <div>
            <p class="mb-2">I'm Jay Tyrrell, a full-stack developer at <a href="https://www.ableto.com/" target="_blank">AbleTo</a>. We are a leading provider of virtual behavioral health care.</p>

            <p class="mb-2">I primarily work in PHP using the <a href="https://laravel.com/" target="_blank">Laravel</a> framework and Javascript using <a href="https://vuejs.org/" target="_blank">Vue.js</a>.</p>

            <p class="mb-0"><a href="/about">Learn More</a></p>
        </div>
    </div>

    <h3 class="mt-12 mb-6">Latest Articles</h3>

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
@stop
