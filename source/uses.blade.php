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

@section('hero')
    <h2 class="mb-0">Uses</h2>
@endsection

@section('body')
    <div class="max-w-3xl mx-auto">
        <p>After getting inspired from <a href="https://uses.tech/" target="_blank">Uses.tech</a>, here's a list of the tech I use regularly.</p>

        <h4 class="mt-8 mb-0">Software</h4>
        <ul class="mt-3">
            <li><a href="https://www.alfredapp.com/" target="_blank">Alfred</a></li>
            <li><a href="https://github.com/tonsky/FiraCode" target="_blank">Fira Code</a> font</li>
            <li><a href="https://iterm2.com/" target="_blank">iTerm</a> with ZSH and <a href="https://github.com/hwyncho/ayu-iTerm" target="_blank">Ayu Mirage</a> theme</li>
            <li><a href="https://www.lastpass.com/" target="_blank">LastPass</a></li>
            <li><a href="https://www.notion.so/" target="_blank">Notion</a></li>
            <li><a href="https://protonmail.com/" target="_blank">ProtonMail</a></li>
            <li><a href="https://www.sublimemerge.com/" target="_blank">Sublime Merge</a></li>
            <li><a href="https://www.sublimetext.com/3" target="_blank">Sublime Text 3</a> with <a href="https://github.com/dempfi/ayu" target="_blank">Ayu Mirage</a> theme</li>
            <li><a href="https://apps.apple.com/us/app/unsplash-wallpapers/id1284863847?mt=12" target="_blank">Unsplash Wallpapers</a></li>
            <li><a href="https://www.youneedabudget.com/" target="_blank">You Need A Budget</a></li>
        </ul>

        <h4 class="mt-8 mb-0">Hardware</h4>
        <ul class="mt-3">
            <li>15" MacBook Pro (Early 2013, 2.4 GHz Quad-Core Intel Core i7, 8 GB 1600 MHz DDR3)</li>
            <li>Looking to buy an external monitor soon</li>
            <li><a href="https://www.sony.com/electronics/headband-headphones/wh-1000xm3" target="_blank">Sony WH-1000XM3</a> Headphones</li>
        </ul>
    </div>
@endsection
