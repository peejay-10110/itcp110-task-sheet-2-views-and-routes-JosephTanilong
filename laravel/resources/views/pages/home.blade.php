@extends('layouts.app')
@section('title', 'Home — NatureWorld')

@section('content')
<div style="text-align:center; padding:4rem 0 3rem;">
    <span class="tag">🌍 Explore · Protect · Restore</span>
    <h1 style="font-size:3rem; margin-bottom:1rem;">
        Welcome to <span style="color:var(--accent);">NatureWorld</span>
    </h1>
    <p style="font-size:1.1rem; max-width:580px; margin:0 auto 2rem;">
        Your guide to the living planet — from ancient rainforests and ocean depths to mountain peaks and urban wildlife corridors.
    </p>
    <a href="{{ route('ecosystems') }}" class="btn" style="margin-right:0.8rem;">Explore Ecosystems</a>
    <a href="{{ route('contact') }}"    class="btn btn-outline">Join Us</a>
</div>

<div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1rem; margin-top:2rem;">
    <div class="card">
        <h2 style="font-size:1rem;">🌲 Ancient Forests</h2>
        <p style="font-size:0.85rem;">Old-growth trees shelter thousands of species and store centuries of carbon.</p>
    </div>
    <div class="card">
        <h2 style="font-size:1rem;">🌊 Living Oceans</h2>
        <p style="font-size:0.85rem;">The sea covers 71% of Earth and produces half of the oxygen we breathe.</p>
    </div>
    <div class="card">
        <h2 style="font-size:1rem;">🦋 Wild Connections</h2>
        <p style="font-size:0.85rem;">Every creature — from fungi to whales — plays a role in the web of life.</p>
    </div>
</div>
@endsection