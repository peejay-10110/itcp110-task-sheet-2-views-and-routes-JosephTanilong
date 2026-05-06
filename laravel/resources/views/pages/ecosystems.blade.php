@extends('layouts.app')
@section('title', 'Ecosystems — NatureWorld')

@section('content')
<span class="tag">Earth's Biomes</span>
<h1>Ecosystems</h1>
<p>Our planet is home to a dazzling array of ecosystems — each with its own climate, flora, fauna, and ecological role.</p>

@php
$ecosystems = [
    ['icon'=>'🌳','title'=>'Tropical Rainforest', 'desc'=>'Home to 50% of all species on Earth, tropical rainforests are the lungs of our planet.'],
    ['icon'=>'🌊','title'=>'Coral Reefs',          'desc'=>'The ocean's most biodiverse habitat, supporting 25% of all marine life on just 1% of the sea floor.'],
    ['icon'=>'🏔️','title'=>'Alpine Meadows',       'desc'=>'High-altitude grasslands burst with wildflowers during their brief summers, feeding migrating pollinators.'],
    ['icon'=>'🌾','title'=>'Grasslands & Savannas','desc'=>'Vast open plains sustain enormous herds of grazing animals and the predators that follow them.'],
    ['icon'=>'🌿','title'=>'Wetlands & Marshes',   'desc'=>'Nature's water filters — wetlands purify runoff, prevent flooding, and shelter migrating birds.'],
    ['icon'=>'🌵','title'=>'Deserts',              'desc'=>'Far from lifeless, deserts host uniquely adapted plants and animals that thrive in extreme heat and drought.'],
];
@endphp

<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-top:2rem;">
    @foreach($ecosystems as $eco)
    <div class="card">
        <div style="font-size:2rem;margin-bottom:0.6rem;">{{ $eco['icon'] }}</div>
        <h2 style="font-size:1rem;margin-bottom:0.4rem;">{{ $eco['title'] }}</h2>
        <p style="font-size:0.85rem;margin:0;">{{ $eco['desc'] }}</p>
    </div>
    @endforeach
</div>

<div style="text-align:center;margin-top:2.5rem;">
    <a href="{{ route('contact') }}" class="btn">Support Conservation</a>
</div>
@endsection