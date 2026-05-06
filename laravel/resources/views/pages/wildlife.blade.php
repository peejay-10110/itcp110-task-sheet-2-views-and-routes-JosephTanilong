@extends('layouts.app')
@section('title', 'Wildlife Gallery — NatureWorld')

@section('content')
<span class="tag">Species Spotlight</span>
<h1>Wildlife Gallery</h1>
<p>A showcase of remarkable creatures from every corner of the globe — each one a testament to the power of evolution.</p>

@php
$animals = [
    ['title'=>'Amur Leopard',       'status'=>'Critically Endangered', 'habitat'=>'Temperate Forest · Russia', 'color'=>'#cf6f2d'],
    ['title'=>'Blue Whale',         'status'=>'Endangered',            'habitat'=>'Open Ocean · Worldwide',    'color'=>'#378add'],
    ['title'=>'Monarch Butterfly',  'status'=>'Endangered',            'habitat'=>'Grassland · North America', 'color'=>'#ef9f27'],
    ['title'=>'Mountain Gorilla',   'status'=>'Endangered',            'habitat'=>'Cloud Forest · Uganda',     'color'=>'#4caf7d'],
    ['title'=>'Snow Leopard',       'status'=>'Vulnerable',            'habitat'=>'Alpine · Central Asia',     'color'=>'#888799'],
    ['title'=>'Giant Sea Turtle',   'status'=>'Vulnerable',            'habitat'=>'Tropical Sea · Pacific',    'color'=>'#1d9e75'],
];
@endphp

<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-top:2rem;">
    @foreach($animals as $animal)
    <div class="card" style="border-top:3px solid {{ $animal['color'] }};">
        <h2 style="font-size:1rem;color:var(--text);margin-bottom:0.3rem;">{{ $animal['title'] }}</h2>
        <span style="font-size:0.72rem;color:{{ $animal['color'] }};font-family:'Courier New',monospace;display:block;margin-bottom:0.3rem;">● {{ $animal['status'] }}</span>
        <span style="font-family:'Courier New',monospace;font-size:0.72rem;color:var(--muted);">{{ $animal['habitat'] }}</span>
    </div>
    @endforeach
</div>
@endsection