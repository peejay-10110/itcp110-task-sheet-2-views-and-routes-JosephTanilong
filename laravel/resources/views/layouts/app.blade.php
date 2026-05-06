<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'NatureWorld')</title>
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        :root {
            --bg: #0b130d; --surface: #111a13; --border: #1e3023;
            --accent: #4caf7d; --text: #ddeee2; --muted: #7a9e85;
        }
        body { font-family: Georgia,serif; background:var(--bg); color:var(--text); min-height:100vh; display:flex; flex-direction:column; }
        nav { background:var(--surface); border-bottom:1px solid var(--border); padding:0 2rem; display:flex; align-items:center; justify-content:space-between; height:60px; position:sticky; top:0; z-index:100; }
        nav .logo { font-size:1.4rem; font-weight:bold; color:var(--accent); text-decoration:none; }
        nav ul { list-style:none; display:flex; gap:0.5rem; }
        nav ul a { color:var(--muted); text-decoration:none; padding:0.4rem 0.8rem; border-radius:6px; font-family:'Courier New',monospace; font-size:0.85rem; transition:all 0.2s; }
        nav ul a:hover, nav ul a.active { color:var(--text); background:var(--border); }
        main { flex:1; padding:3rem 2rem; max-width:960px; width:100%; margin:0 auto; }
        footer { background:var(--surface); border-top:1px solid var(--border); text-align:center; padding:1.2rem; font-size:0.8rem; color:var(--muted); font-family:'Courier New',monospace; }
        h1 { font-size:2.4rem; margin-bottom:0.5rem; }
        h2 { font-size:1.6rem; margin-bottom:1rem; color:var(--accent); }
        p  { color:var(--muted); line-height:1.8; margin-bottom:1rem; }
        .tag { display:inline-block; background:var(--border); color:var(--accent); padding:2px 10px; border-radius:4px; font-family:'Courier New',monospace; font-size:0.75rem; margin-bottom:1.5rem; }
        .btn { display:inline-block; background:var(--accent); color:#0b130d; padding:0.6rem 1.4rem; border-radius:8px; text-decoration:none; font-family:'Courier New',monospace; font-size:0.85rem; border:none; cursor:pointer; font-weight:bold; transition:opacity 0.2s; }
        .btn:hover { opacity:0.85; }
        .btn-outline { background:transparent; border:1px solid var(--accent); color:var(--accent); font-weight:normal; }
        .card { background:var(--surface); border:1px solid var(--border); border-radius:12px; padding:1.5rem; margin-bottom:1.2rem; }
        .alert-success { background:#0d2e17; border:1px solid #2d5a3a; color:#6fcf97; padding:0.8rem 1.2rem; border-radius:8px; margin-bottom:1.5rem; font-family:'Courier New',monospace; font-size:0.85rem; }
        .alert-error   { background:#2e1a1a; border:1px solid #5a2d2d; color:#cf6f6f; padding:0.8rem 1.2rem; border-radius:8px; margin-bottom:1rem;   font-family:'Courier New',monospace; font-size:0.85rem; }
    </style>
</head>
<body>
<nav>
    <a href="{{ route('home') }}" class="logo">🌿 NatureWorld</a>
    <ul>
        <li><a href="{{ route('home') }}"        class="{{ request()->routeIs('home')        ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}"       class="{{ request()->routeIs('about')       ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('ecosystems') }}"  class="{{ request()->routeIs('ecosystems')  ? 'active' : '' }}">Ecosystems</a></li>
        <li><a href="{{ route('wildlife') }}"    class="{{ request()->routeIs('wildlife')    ? 'active' : '' }}">Wildlife</a></li>
        <li><a href="{{ route('blog') }}"        class="{{ request()->routeIs('blog*')       ? 'active' : '' }}">Journal</a></li>
        <li><a href="{{ route('faq') }}"         class="{{ request()->routeIs('faq')         ? 'active' : '' }}">FAQ</a></li>
        <li><a href="{{ route('contact') }}"     class="{{ request()->routeIs('contact')     ? 'active' : '' }}">Contact</a></li>
    </ul>
</nav>
<main>@yield('content')</main>
<footer>&copy; {{ date('Y') }} NatureWorld &mdash; Protecting our planet, one page at a time</footer>
</body>
</html>