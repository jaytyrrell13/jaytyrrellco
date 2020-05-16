@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('hero')
    <h2 class="mb-0">{{ $page->title }}</h2>
@endsection

@section('body')
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            @yield('content')
        </div>

        @foreach ($page->posts($posts) as $post)
            @include('_components.post-preview-inline')
        @endforeach
    </div>
@stop
