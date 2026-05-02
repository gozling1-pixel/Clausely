@extends('layouts.app')

@section('title', 'About Clausely')
@section('description', 'How Clausely works, who it is for, and important things to know before using it.')

@section('content')

<section class="max-w-3xl mx-auto px-6 pt-20 pb-16">

    <span class="text-xs font-mono uppercase tracking-wider" style="color: var(--muted);">About</span>

    <h1 class="mt-2 text-4xl md:text-5xl font-bold leading-tight tracking-tight">
        Legal documents, made <span style="color: var(--accent);">accessible</span>.
    </h1>

    <p class="mt-6 text-lg" style="color: var(--muted);">
        Clausely is a tool that helps non-lawyers generate properly-formatted legal documents through a friendly, plain-English interface. It is built on the principle that creating a legal document shouldn't require a legal vocabulary.
    </p>

</section>

<section class="max-w-3xl mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold mb-4">Who it's for</h2>
    <p class="mb-4" style="color: var(--muted);">
        Freelancers signing their first consultancy agreement. Small business owners who need an NDA before a partnership conversation. Individuals dealing with someone who needs to be told, formally, to stop doing something.
    </p>
    <p style="color: var(--muted);">
        If you've ever stared at a legal template online and wondered which bits to fill in, Clausely is for you.
    </p>
</section>

<section class="max-w-3xl mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold mb-4">How it works</h2>
    <p class="mb-4" style="color: var(--muted);">
        You pick a template. Clausely asks you a series of plain-English questions — "How long should this last?" rather than "Term of Agreement" — and uses your answers to fill in a properly-drafted legal document, which you can download as a Word or PDF file.
    </p>
    <p style="color: var(--muted);">
        The questions are written for non-lawyers. The output is written in formal legal language, because the document might need to hold up.
    </p>
</section>

<section class="max-w-3xl mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold mb-4">Privacy</h2>
    <p class="mb-4" style="color: var(--muted);">
        Clausely doesn't have user accounts. You don't sign up, and we don't ask for your email. When you start a draft, you get a private link — bookmark it to come back to it later.
    </p>
    <p style="color: var(--muted);">
        Drafts are automatically deleted 30 days after you last edit them. We don't store the documents you generate. We don't run analytics that track individuals.
    </p>
    <p class="mt-4 text-sm" style="color: var(--muted);">
        This is deliberate. Legal documents often contain sensitive information, and the safest place for that information is not on someone else's server.
    </p>
</section>

<section class="max-w-3xl mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold mb-4">Jurisdiction</h2>
    <p style="color: var(--muted);">
        All current templates are written for <strong style="color: var(--text);">England &amp; Wales</strong>. If you need a document for Scotland, Northern Ireland, or another jurisdiction, the document Clausely generates may not be appropriate. Speak to a solicitor in that jurisdiction.
    </p>
</section>

<section class="max-w-3xl mx-auto px-6 py-8">
    <div class="clausely-card">
        <p><span class="badge-warn">Important</span></p>
        <h2 class="mt-3 text-xl font-bold">Clausely is not legal advice</h2>
        <p class="mt-3" style="color: var(--muted);">
            The documents Clausely generates are starting points. They are not tailored to your specific situation, and using one is not a substitute for speaking to a qualified solicitor.
        </p>
        <p class="mt-3" style="color: var(--muted);">
            For anything that genuinely matters — an agreement involving significant money, an unusual situation, or a dispute that might end up in court — get a real lawyer to review what you've drafted before you sign or send it.
        </p>
    </div>
</section>

<section class="max-w-3xl mx-auto px-6 py-8">
    <h2 class="text-2xl font-bold mb-4">About this project</h2>
    <p class="mb-4" style="color: var(--muted);">
        Clausely is a portfolio project. It is open source, free to use, and built to demonstrate that thoughtful product design and modern engineering can make legal services more accessible.
    </p>
    <p style="color: var(--muted);">
        Source code is on <a href="https://github.com/gozling1-pixel/Clausely" target="_blank" rel="noopener" style="color: var(--accent);" class="hover:opacity-80">GitHub</a>. Contributions, especially template reviews from qualified lawyers, are welcome.
    </p>
</section>

<section class="max-w-3xl mx-auto px-6 py-16 text-center">
    <a href="{{ route('home') }}" class="clausely-btn-secondary">
        ← Back to templates
    </a>
</section>

@endsection