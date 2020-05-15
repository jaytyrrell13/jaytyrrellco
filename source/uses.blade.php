---
title: Uses
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <div class="max-w-3xl mx-auto mt-8">
        <h2>Uses</h2>

        <p>After getting inspired from <a href="https://uses.tech/" target="_blank">Uses.tech</a>, here's a list of all of the tech I use regularly.</p>

        <h4 class="mt-8 mb-0">Software</h4>
        <ul class="mt-3">
            <li><a href="https://www.sublimetext.com/3" target="_blank">Sublime Text 3</a> with <a href="https://github.com/dempfi/ayu" target="_blank">Ayu Mirage</a> theme</li>
            <li><a href="https://github.com/tonsky/FiraCode" target="_blank">Fira Code</a> font</li>
            <li><a href="https://iterm2.com/" target="_blank">iTerm</a> with ZSH and <a href="https://github.com/hwyncho/ayu-iTerm" target="_blank">Ayu Mirage</a> theme</li>
        </ul>

        <h4 class="mt-8 mb-0">Hardware</h4>
        <ul class="mt-3">
            <li>15" MacBook Pro (Early 2013, 2.4 GHz Quad-Core Intel Core i7, 8 GB 1600 MHz DDR3)</li>
            <li>Looking to buy an external monitor soon</li>
        </ul>
    </div>
@endsection
