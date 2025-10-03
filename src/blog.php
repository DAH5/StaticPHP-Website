---
layout: src/_includes/layout-2025-09.php
staticphp_nav_item: blog
page_title: Blog
---

<section class="posts">
    <div class="container">
        --- loop( dir = "src/blog", sort = "ascending", json = "public/api/blog.json" ) ---
            <div class="post">
                <div class="post-title"><a href="--- loop.uri ---">--- loop.post-title ---</a></div>
                <div class="post-meta">Posted by --- loop.post-author-name --- on --- loop.post-date --- at --- loop.post-time ---.</div>
                <div class="post-excerpt">--- loop.post-excerpt ---</div>
            </div>
        --- endloop ---
    </div>
</section>
