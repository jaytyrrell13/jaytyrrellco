@extends('_layouts.master')

@section('hero')
    <h2 class="mb-0">{{ $page->title }}</h2>
@endsection

@section('body')
    <div class="mb-8">
        @yield('content')
    </div>

    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview-inline')
    @endforeach
@stop
