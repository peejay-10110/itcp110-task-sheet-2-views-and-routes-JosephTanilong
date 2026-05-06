@extends('layouts.app')
@section('title', 'About — NatureWorld')

@section('content')
<span class="tag">Our Story</span>
<h1>Who We Are</h1>
<p>NatureWorld is a community of field naturalists, ecologists, and conservation advocates dedicated to sharing the wonders of the natural world and inspiring action to protect it.</p>

<div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem; margin-top:2rem;">
    <div class="card">
        <h2>Our Mission</h2>
        <p>To educate, inspire, and mobilise people around the world to defend biodiversity and restore wild places for future generations.</p>
    </div>
    <div class="card">
        <h2>Our Vision</h2>
        <p>A thriving planet where forests stand tall, rivers run clear, and every species has the space it needs to survive and flourish.</p>
    </div>
</div>

<div class="card" style="margin-top:1rem;">
    <h2>Meet the Team</h2>
    <div style="display:flex; gap:1.5rem; flex-wrap:wrap;">
        @foreach ([['Lena','Forest Ecologist'],['Marco','Marine Biologist'],['Aisha','Conservation Writer']] as $member)
        <div style="text-align:center;">
            <div style="width:64px;height:64px;border-radius:50%;background:var(--border);display:flex;align-items:center;justify-content:center;font-size:1.6rem;margin:0 auto 0.5rem;">
                {{ substr($member[0],0,1) }}
            </div>
            <strong style="color:var(--text);font-size:0.9rem;">{{ $member[0] }}</strong><br>
            <span style="font-size:0.75rem;color:var(--muted);">{{ $member[1] }}</span>
        </div>
        @endforeach
    </div>
</div>
@endsection