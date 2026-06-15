@extends('index')

@section('section-container')
    <main style="min-height: calc(100vh - 120px); padding: 32px 16px; background: #f8fafc; color: #0f172a; font-family: Arial, Helvetica, sans-serif;">
        <section style="max-width: 980px; margin: 0 auto; display: grid; gap: 24px;">
            <header style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 28px 24px; box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);">
                <p style="margin: 0 0 8px; font-size: 0.85rem; letter-spacing: 0.16em; text-transform: uppercase; color: #64748b;">
                    Blog Posts
                </p>
                <h1 style="margin: 0; font-size: clamp(1.8rem, 4vw, 2.6rem); line-height: 1.1; font-weight: 700;">
                    Simple posts for learning and experimenting.
                </h1>
            </header>

            <div style="display: grid; gap: 20px;">
                @forelse ($posts as $post)
                    <article style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 24px; box-shadow: 0 10px 24px rgba(15, 23, 42, 0.04);">
                        <h2 style="margin: 0 0 12px; font-size: 1.4rem; line-height: 1.3;">
                            {{ $post->title }}
                        </h2>
                        <p style="margin: 0; color: #475569; line-height: 1.7;">
                            {{ $post->content }}
                        </p>
                    </article>
                @empty
                    <article style="background: #ffffff; border: 1px dashed #cbd5e1; border-radius: 20px; padding: 28px; text-align: center; color: #64748b;">
                        No blog posts yet. Add your first post using the form below.
                    </article>
                @endforelse
            </div>

            <section style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 28px 24px; box-shadow: 0 10px 24px rgba(15, 23, 42, 0.04);">
                <p style="margin: 0 0 16px; font-size: 0.85rem; letter-spacing: 0.16em; text-transform: uppercase; color: #64748b;">
                    New Post
                </p>
                <form action="{{ route('create-blog') }}" method="POST" style="display: grid; gap: 14px; max-width: 640px;">
                    @csrf
                    <input type="text" placeholder="Enter Blog Title" name="blog_title" style="width: 100%; padding: 14px 16px; border: 1px solid #cbd5e1; border-radius: 12px; font-size: 1rem; background: #f8fafc; color: #0f172a;">
                    <textarea placeholder="Enter Blog Content" name="blog_content" rows="6" style="width: 100%; padding: 14px 16px; border: 1px solid #cbd5e1; border-radius: 12px; font-size: 1rem; background: #f8fafc; color: #0f172a; resize: vertical;"></textarea>
                    <button type="submit" style="justify-self: start; padding: 12px 20px; border: 0; border-radius: 999px; background: #0f172a; color: #ffffff; font-weight: 600; cursor: pointer;">
                        Create Blog
                    </button>
                </form>
            </section>
        </section>
    </main>
@endsection
