---
title: About
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('hero')
    <h2 class="mb-0">About</h2>
@endsection

@section('body')
    <div class="max-w-3xl mx-auto">
        <p>Hey! I'm Jay Tyrrell. I'm a full-stack developer based in New York City. I was born and raised in South Florida and moved to New York in 2012.</p>
    </div>
@endsection
