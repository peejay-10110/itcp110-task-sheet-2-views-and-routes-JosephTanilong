<?php

use Illuminate\Support\Facades\Route;

// 1. Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// 2. About
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// 3. Ecosystems (Services)
Route::get('/ecosystems', function () {
    return view('pages.ecosystems');
})->name('ecosystems');

// 4. Wildlife Gallery (Portfolio)
Route::get('/wildlife', function () {
    return view('pages.wildlife');
})->name('wildlife');

// 5. Blog list
Route::get('/blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'The Secret Life of Old-Growth Forests', 'date' => 'May 1, 2026', 'excerpt' => 'Discover how ancient trees communicate through underground fungal networks.'],
        ['id' => 2, 'title' => 'Ocean Currents and Climate',            'date' => 'May 3, 2026', 'excerpt' => 'How the deep sea drives weather patterns across the globe.'],
        ['id' => 3, 'title' => 'Pollinator Crisis: What You Can Do',    'date' => 'May 5, 2026', 'excerpt' => 'Bees, butterflies and beetles — why they matter and how to help.'],
    ];
    return view('pages.blog', compact('posts'));
})->name('blog');

// 6. Blog single
Route::get('/blog/{id}', function ($id) {
    $post = [
        'id'      => $id,
        'title'   => "Nature Journal #$id",
        'date'    => 'May 2026',
        'content' => "Entry #$id — The forest floor was still damp from last night's rain. Mist clung to the ferns as the first shafts of sunlight cut through the canopy, illuminating millions of spores drifting silently upward.",
        'author'  => 'Field Naturalist',
    ];
    return view('pages.blog-single', compact('post'));
})->name('blog.single');

// 7. Contact (GET)
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// 8. Contact (POST)
Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email',
        'message' => 'required|string|max:1000',
    ]);
    return redirect()->route('contact')->with('success', 'Your message has been sent to our nature team!');
})->name('contact.submit');

// 9. FAQ
Route::get('/faq', function () {
    $faqs = [
        ['q' => 'What is biodiversity?',             'a' => 'Biodiversity refers to the variety of life on Earth — genes, species, and ecosystems — and the ecological processes that sustain them.'],
        ['q' => 'Why are forests important?',         'a' => 'Forests absorb CO₂, regulate water cycles, prevent erosion, and shelter more than 80% of terrestrial species.'],
        ['q' => 'How do I start a wildlife garden?',  'a' => 'Plant native species, avoid pesticides, add a water source, and leave some areas of your garden undisturbed.'],
        ['q' => 'What threatens coral reefs?',        'a' => 'Rising ocean temperatures, acidification, overfishing, and coastal pollution are the primary threats to reef ecosystems.'],
        ['q' => 'Can I help endangered species?',     'a' => 'Yes — support conservation charities, reduce your carbon footprint, buy sustainably sourced products, and spread awareness.'],
    ];
    return view('pages.faq', compact('faqs'));
})->name('faq');

// 10. 404
Route::get('/not-found', function () {
    return view('pages.not-found');
})->name('not-found');