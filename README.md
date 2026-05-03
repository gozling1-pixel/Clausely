# Clausely

**Legal documents, in plain English.**

A web tool that helps non-lawyers — freelancers, small businesses, individuals — generate properly-formatted legal documents through a friendly, plain-English interface. Plain-English questions in, formal legal language out.

**Live demo:** https://clausely-jd0m.onrender.com

> Clausely is a portfolio project, not a substitute for legal advice. Documents are generated from templates and have not been reviewed by a qualified solicitor. For anything important, talk to a real lawyer.

---

## What it does

Clausely is built around three starter templates: a Mutual NDA, a Freelance Agreement, and a Cease and Desist letter. The user answers a friendly form (*"How long should this last?"*) and receives a formal document (*"This Agreement shall remain in force for a period of [X] months..."*) ready to download as either DOCX or PDF.

Drafts are addressable by random URL slug (e.g. `/draft/x7k9m2p4`) — no user accounts, no logins, no email collection. Drafts auto-purge after 30 days.

## Architecture decisions

Each of these is a deliberate choice, not the default:

**Templates as data, not code.** Each template lives in a YAML file in `resources/templates/`. Adding a new template means writing a new YAML file — no PHP changes required. This means the legal content can be reviewed and edited by a non-developer (a real lawyer, ideally).

**The form and the document body are decoupled.** The user-facing field labels are written in plain English; the document clauses are written in formal legal language. The YAML maps between them. This separation means non-lawyers get a friendly experience and the output still reads like a real legal document.

**Privacy by design.** No user accounts means no GDPR data-controller obligations beyond the bare minimum. Drafts are accessed via random URL slugs, stored anonymously, and auto-purged after 30 days. Users may put sensitive information into their answers, so the architecture is designed to minimise how much of that the system retains.

**Jurisdiction is a first-class field.** v1 ships England & Wales only, but every template, draft, and rendered document carries a `jurisdiction` field. Adding Scotland or Northern Ireland is a content problem (write the YAML), not a code rewrite.

**SQLite locally, Postgres in production.** Local development uses SQLite for simplicity. Production uses Postgres on Neon. Laravel's `DATABASE_URL` abstraction makes the switch a config change, not a code change. The privacy-by-design story is preserved at the schema and behaviour layer rather than depending on a specific database engine.

## Stack

- **Backend:** Laravel 13 on PHP 8.4
- **Frontend:** Tailwind CSS + Alpine.js (no SPA, no build complexity beyond Vite)
- **Database:** SQLite (dev), PostgreSQL via Neon (production)
- **Document export:** PHPWord for DOCX, mPDF for PDF
- **Hosting:** Render free tier (web service), Neon free tier (Postgres)
- **Container:** Docker, Nginx + PHP-FPM via Supervisor

## Deployment

The project is containerised. The included `Dockerfile` is host-agnostic — the same image runs on Render, Fly.io, a VPS, or anywhere else that runs containers. `docker/start.sh` handles runtime configuration: substitutes the platform-supplied `PORT` into the Nginx config, runs migrations, caches Laravel config, then starts Nginx and PHP-FPM under Supervisor.

Render auto-deploys from `main`. A push to GitHub triggers a fresh build, image push, and rollout.

## Running locally

```bash
git clone https://github.com/gozling1-pixel/Clausely.git
cd Clausely
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

Then visit `http://127.0.0.1:8000`.

## Project status

This is an in-progress portfolio project, built in phases:

- Phase 1: Foundations — landing page, about page, dark theme, deployed (done)
- Phase 2: Template engine — YAML loader, form rendering, NDA template, DOCX/PDF export (in progress)
- Phase 3: Conditional sections, remaining two templates
- Phase 4: Polish, validation, auto-purge job, screenshots, demo GIF

## Built with AI assistance

This project was built with substantial AI assistance — I made the architectural decisions and can defend them; AI helped me write the code. Anthropic's Claude was the assistant used throughout. The architectural reasoning, design decisions, and tradeoffs in this README and the codebase are mine.

## License

MIT.
