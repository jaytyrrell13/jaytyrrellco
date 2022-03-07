---
title: Vim Cheat Sheet
---
@extends('_layouts.master')

@section('hero')
<h2 class="mb-0">Vim Cheat Sheet</h2>
@endsection

@section('body')
    <div class="mb-2"><code>Shift-h</code> Move cursor to top of screen</div>
    <div class="mb-2"><code>Shift-m</code> Move cursor to middle of screen</div>
    <div class="mb-2"><code>Shift-l</code> Move cursor to bottom of screen</div>
    <div class="mb-2"><code>ZZ</code> Write current file, if modified, then exit</div>
    <div class="mb-2"><code>:x</code> Write current file then exit</div>
    <div class="mb-2"><code>ds&lt;object&gt;</code> Delete surrounding text object</div>
    <div class="mb-2"><code>cs<from><to></code> Change surrounding from to to</div>
    <div class="mb-2"><code>ys&lt;motion&gt;&lt;object&gt;</code> You surround motion and object</div>
    <div class="mb-2"><code>gcc</code> Comment out current line</div>
    <div class="mb-2"><code>gc&lt;motion&gt;</code> Comment out motion</div>
    <div class="mb-2"><code>gc}</code> Comment out paragraph</div>
    <div class="mb-2"><code>gcu</code> Uncomment the current and adjacent lines</div>
    <div class="mb-2"><code>Shift-j</code> Join current line with line underneath</div>
    <div class="mb-2"><code>:%y+</code> Copy all lines in this file to the system clipboard</div>
    <div class="mb-2"><code>:norm! @a</code> Run macro "a" on visually selected lines</div>
    <div class="mb-2"><code>:5,10norm! @a</code> Run macro "a" on range of lines</div>

    <h3 class="mt-8 mb-2">Fugitive</h3>
    <div class="mb-2"><code>g?</code> Open help</div>
    <div class="mb-2"><code>cc</code> Commit</div>
    <div class="mb-2"><code>ca</code> Amend last commit and edit message</div>
    <div class="mb-2"><code>ce</code> Amend last commit without editing message</div>
    <div class="mb-2"><code>co&lt;space&gt;</code> Switch branches</div>
    <div class="mb-2"><code>cm&lt;space&gt;</code> Merge branches</div>
    <div class="mb-2"><code>dv</code> Diff verical split on file</div>
    <div class="mb-2"><code>:GRename &lt;destination&gt;</code> Move relative to the parent directory of the current file</div>
    <div class="mb-2"><code>:Git blame</code> Git blame</div>
    <div class="mb-2"><code>dv</code> + <code>:diffget //2</code> or <code>:diffget //3</code> + <code>:Gwrite</code> Resolve conflicts</div>
@endsection
