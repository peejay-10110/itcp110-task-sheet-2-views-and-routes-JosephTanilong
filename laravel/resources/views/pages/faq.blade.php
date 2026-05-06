@extends('layouts.app')
@section('title', 'FAQ — NatureWorld')

@section('content')
<span class="tag">Common Questions</span>
<h1>Frequently Asked Questions</h1>
<p>Answers to the questions we hear most often from fellow nature lovers and conservation newcomers.</p>

<div style="margin-top:2rem;">
    @foreach($faqs as $index => $faq)
    <div class="card" style="margin-bottom:0.8rem;">
        <div style="display:flex;align-items:flex-start;gap:1rem;">
            <span style="font-family:'Courier New',monospace;font-size:0.85rem;color:var(--accent);padding-top:2px;">Q{{ $index + 1 }}</span>
            <div>
                <strong style="color:var(--text);display:block;margin-bottom:0.5rem;">{{ $faq['q'] }}</strong>
                <p style="margin:0;font-size:0.9rem;">{{ $faq['a'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div style="margin-top:2rem;text-align:center;">
    <p style="margin-bottom:1rem;">Have a question we haven't answered?</p>
    <a href="{{ route('contact') }}" class="btn">Ask the Team</a>
</div>
@endsection