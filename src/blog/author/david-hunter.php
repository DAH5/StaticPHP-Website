---
layout: src/_includes/layout-2025-09.php
staticphp_nav_item: blog
page_title: Author: David Hunter - Blog
archive-page: true
author: David Hunter
---

<section class="posts">
    <div class="container">
        --- loop( dir = "src/blog/2025", sort = "ascending", filter-key = "post-title", json = "public/api/blog.json" ) ---
            <div class="post">
                <div class="post-title"><a href="--- loop.uri ---">--- loop.post-title ---</a></div>
                <div class="post-meta">Posted by <a href="/blog/author/--- loop.post-author-slug ---">--- loop.post-author-name ---</a> on <a href="/blog/--- loop.post-year ---/">--- loop.post-year ---</a>/<a href="/blog/--- loop.post-year ---/--- loop.post-month ---/">--- loop.post-month ---</a>/<a href="/blog/--- loop.post-year ---/--- loop.post-month ---/--- loop.post-day ---/">--- loop.post-day ---</a> at --- loop.post-time ---.</div>
                <div class="post-excerpt">--- loop.post-excerpt ---</div>
            </div>
        --- endloop ---
    </div>
</section>
