@extends('layouts.app')
@section('title', 'Nature Journal — NatureWorld')

@section('content')
<span class="tag">Field Notes</span>
<h1>Nature Journal</h1>
<p>Dispatches from the field — written by naturalists who spend their days watching, listening, and learning from the wild.</p>

<div style="margin-top:2rem;">
    @foreach($posts as $post)
    <div class="card" style="display:flex;justify-content:space-between;align-items:center;">
        <div>
            <h2 style="font-size:1.1rem;color:var(--text);margin-bottom:0.3rem;">{{ $post['title'] }}</h2>
            <p style="font-size:0.85rem;margin-bottom:0.6rem;">{{ $post['excerpt'] }}</p>
            <span style="font-family:'Courier New',monospace;font-size:0.72rem;color:var(--muted);">{{ $post['date'] }}</span>
        </div>
        <a href="{{ route('blog.single', $post['id']) }}" class="btn btn-outline" style="white-space:nowrap;margin-left:1.5rem;">Read →</a>
    </div>
    @endforeach
</div>
@endsection