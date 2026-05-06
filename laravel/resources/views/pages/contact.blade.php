@extends('layouts.app')
@section('title', 'Contact — NatureWorld')

@section('content')
<span class="tag">Get Involved</span>
<h1>Contact Us</h1>
<p>Whether you want to volunteer, share a sighting, collaborate on research, or simply ask a question — we'd love to hear from you.</p>

@if(session('success'))
    <div class="alert-success">🌿 {{ session('success') }}</div>
@endif

<div class="card" style="max-width:560px;">
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf

        <div style="margin-bottom:1.2rem;">
            <label style="display:block;font-family:'Courier New',monospace;font-size:0.8rem;color:var(--muted);margin-bottom:0.4rem;">Your Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Jane Goodall"
                style="width:100%;background:var(--bg);border:1px solid var(--border);color:var(--text);padding:0.6rem 0.9rem;border-radius:8px;font-size:0.9rem;outline:none;">
            @error('name') <div class="alert-error" style="margin-top:0.4rem;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom:1.2rem;">
            <label style="display:block;font-family:'Courier New',monospace;font-size:0.8rem;color:var(--muted);margin-bottom:0.4rem;">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com"
                style="width:100%;background:var(--bg);border:1px solid var(--border);color:var(--text);padding:0.6rem 0.9rem;border-radius:8px;font-size:0.9rem;outline:none;">
            @error('email') <div class="alert-error" style="margin-top:0.4rem;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom:1.5rem;">
            <label style="display:block;font-family:'Courier New',monospace;font-size:0.8rem;color:var(--muted);margin-bottom:0.4rem;">Message</label>
            <textarea name="message" rows="5" placeholder="Tell us about a wildlife sighting, ask a question, or share how you'd like to help..."
                style="width:100%;background:var(--bg);border:1px solid var(--border);color:var(--text);padding:0.6rem 0.9rem;border-radius:8px;font-size:0.9rem;outline:none;resize:vertical;">{{ old('message') }}</textarea>
            @error('message') <div class="alert-error" style="margin-top:0.4rem;">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn">Send Message</button>
    </form>
</div>
@endsection