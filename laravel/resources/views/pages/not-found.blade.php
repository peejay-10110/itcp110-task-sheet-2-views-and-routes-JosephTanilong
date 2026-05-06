{{-- Also copy to: resources/views/errors/404.blade.php for automatic Laravel 404 handling --}}
@extends('layouts.app')
@section('title', '404 — Lost in the Wild')

@section('content')
<div style="text-align:center;padding:5rem 0;">
    <div style="font-size:5rem;margin-bottom:0.5rem;">🌿</div>
    <div style="font-size:4rem;margin-bottom:1rem;opacity:0.15;font-family:'Courier New',monospace;">404</div>
    <h1 style="font-size:2rem;margin-bottom:0.5rem;">Lost in the Wild</h1>
    <p style="margin-bottom:2rem;">This trail doesn't exist — the page may have moved or been reclaimed by the forest.</p>
    <a href="{{ route('home') }}" class="btn">← Back to Base Camp</a>
</div>
@endsection