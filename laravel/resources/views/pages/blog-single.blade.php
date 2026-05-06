@extends('layouts.app')
@section('title', $post['title'] . ' — NatureWorld')

@section('content')
<a href="{{ route('blog') }}" style="color:var(--muted);font-family:'Courier New',monospace;font-size:0.85rem;text-decoration:none;">← Back to Journal</a>

<div style="margin-top:1.5rem;">
    <span class="tag">Field Entry #{{ $post['id'] }}</span>
    <h1>{{ $post['title'] }}</h1>

    <div style="display:flex;gap:1.5rem;margin-bottom:2rem;font-family:'Courier New',monospace;font-size:0.8rem;color:var(--muted);">
        <span>📅 {{ $post['date'] }}</span>
        <span>🌿 {{ $post['author'] }}</span>
    </div>

    <div class="card">
        <p>{{ $post['content'] }}</p>
        <p>A pair of roe deer picked their way through the undergrowth thirty metres away, unaware of my presence. The younger one paused, ears swiveling — catching a sound I couldn't hear — before both vanished silently into the silver birches.</p>
        <p>These small moments of contact with the wild remind us how thin the membrane is between our world and theirs, and how vital it is to keep wild spaces intact and undisturbed.</p>
    </div>
</div>
@endsection