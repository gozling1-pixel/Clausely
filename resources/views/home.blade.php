@extends('layouts.app')

@section('title', 'Clausely — Plain-English legal documents')

@section('content')

{{-- Hero section --}}
<section class="max-w-4xl mx-auto px-6 pt-20 pb-16 text-center">
    <span class="badge-free">Free · Open source · Privacy-first</span>

    <h1 class="mt-6 text-4xl md:text-6xl font-bold leading-tight tracking-tight">
        Legal documents,<br>
        <span style="color: var(--accent);">in plain English.</span>
    </h1>

    <p class="mt-6 text-lg max-w-2xl mx-auto" style="color: var(--muted);">
        Generate properly-formatted NDAs, freelance contracts, and cease and desist letters by answering a few simple questions. No legal jargon required.
    </p>

    <div class="mt-10 flex flex-wrap justify-center gap-3">
        <a href="#templates" class="clausely-btn-primary">
            Browse templates
            <span aria-hidden="true">→</span>
        </a>
        <a href="{{ route('about') }}" class="clausely-btn-secondary">
            How it works
        </a>
    </div>

    <p class="mt-8 text-xs" style="color: var(--muted);">
        England &amp; Wales · Not legal advice
    </p>
</section>

{{-- Templates section --}}
<section id="templates" class="max-w-6xl mx-auto px-6 py-16">
    <div class="mb-10">
        <h2 class="text-2xl md:text-3xl font-bold">Available templates</h2>
        <p class="mt-2" style="color: var(--muted);">Three documents, ready to generate. More coming.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-4">

        <div class="clausely-card clausely-card-hover">
            <div class="flex items-start justify-between mb-4">
                <span class="text-xs font-mono uppercase tracking-wider" style="color: var(--muted);">Confidentiality</span>
                <span class="badge-free">Ready</span>
            </div>
            <h3 class="text-lg font-semibold">Mutual NDA</h3>
            <p class="mt-2 text-sm" style="color: var(--muted);">For two parties sharing confidential information with each other. Suitable for partnership talks, vendor evaluations, or pre-contract discussions.</p>
            <div class="mt-6 text-xs" style="color: var(--muted);">
                <span class="font-mono">~5 min</span> · 8 questions
            </div>
        </div>

        <div class="clausely-card clausely-card-hover">
            <div class="flex items-start justify-between mb-4">
                <span class="text-xs font-mono uppercase tracking-wider" style="color: var(--muted);">Services</span>
                <span class="badge-free">Ready</span>
            </div>
            <h3 class="text-lg font-semibold">Freelance Agreement</h3>
            <p class="mt-2 text-sm" style="color: var(--muted);">A consultancy contract covering scope, payment terms, IP ownership, and termination. For freelancers and the businesses that hire them.</p>
            <div class="mt-6 text-xs" style="color: var(--muted);">
                <span class="font-mono">~10 min</span> · 18 questions
            </div>
        </div>

        <div class="clausely-card clausely-card-hover">
            <div class="flex items-start justify-between mb-4">
                <span class="text-xs font-mono uppercase tracking-wider" style="color: var(--muted);">Enforcement</span>
                <span class="badge-free">Ready</span>
            </div>
            <h3 class="text-lg font-semibold">Cease &amp; Desist Letter</h3>
            <p class="mt-2 text-sm" style="color: var(--muted);">A formal warning letter when someone is doing something they need to stop. Typical uses: copyright issues, harassment, contract breaches.</p>
            <div class="mt-6 text-xs" style="color: var(--muted);">
                <span class="font-mono">~5 min</span> · 6 questions
            </div>
        </div>

    </div>

    <p class="mt-10 text-xs text-center" style="color: var(--muted);">
        All templates are drafts to get you started. Have your final document reviewed by a solicitor for anything important.
    </p>
</section>

{{-- How it works section --}}
<section class="max-w-4xl mx-auto px-6 py-16">
    <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">How it works</h2>

    <div class="grid md:grid-cols-3 gap-6">
        <div>
            <div class="font-mono text-sm mb-2" style="color: var(--accent);">01</div>
            <h3 class="font-semibold mb-2">Pick a template</h3>
            <p class="text-sm" style="color: var(--muted);">Choose from NDA, Freelance Agreement, or Cease &amp; Desist. More templates coming.</p>
        </div>
        <div>
            <div class="font-mono text-sm mb-2" style="color: var(--accent);">02</div>
            <h3 class="font-semibold mb-2">Answer in plain English</h3>
            <p class="text-sm" style="color: var(--muted);">No legal jargon. Just everyday questions like "How long should this last?" and "Who's involved?"</p>
        </div>
        <div>
            <div class="font-mono text-sm mb-2" style="color: var(--accent);">03</div>
            <h3 class="font-semibold mb-2">Download as DOCX or PDF</h3>
            <p class="text-sm" style="color: var(--muted);">Get a properly-formatted legal document, ready to review and sign.</p>
        </div>
    </div>
</section>

@endsection