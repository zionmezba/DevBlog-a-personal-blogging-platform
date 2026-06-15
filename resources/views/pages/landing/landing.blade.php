@extends('index')

@section('section-container')
    <main style="min-height: calc(100vh - 120px); display: flex; align-items: center; justify-content: center; padding: 32px 16px; background: #f8fafc; color: #0f172a; font-family: Arial, Helvetica, sans-serif;">
        <section style="max-width: 720px; width: 100%; text-align: center; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 48px 32px; box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);">
            <p style="margin: 0 0 12px; font-size: 0.85rem; letter-spacing: 0.16em; text-transform: uppercase; color: #64748b;">
                DevBlog
            </p>
            <h1 style="margin: 0 0 16px; font-size: clamp(2.5rem, 6vw, 4.5rem); line-height: 1; font-weight: 700;">
                Minimal blog learning space.
            </h1>
            <p style="margin: 0 auto 28px; max-width: 520px; font-size: 1.05rem; line-height: 1.7; color: #475569;">
                A clean Laravel blog starter for learning how posts, pages, and simple content flows work together.
            </p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <a href="/blogs" style="display: inline-block; padding: 12px 20px; border-radius: 999px; background: #0f172a; color: #ffffff; text-decoration: none; font-weight: 600;">
                    View Blogs
                </a>
                <a href="#" style="display: inline-block; padding: 12px 20px; border-radius: 999px; border: 1px solid #cbd5e1; color: #0f172a; text-decoration: none; font-weight: 600;">
                    Learn More
                </a>
            </div>
        </section>
    </main>
@endsection
