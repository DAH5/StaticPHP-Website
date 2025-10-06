---
layout: src/_includes/layout-2025-09.php
staticphp_nav_item: blog
page_title: Authors - Blog
archive-page: true
---

<section class="posts">
    <div class="container">
        --- loop( dir = "src/blog/author", sort = "ascending", filter-key = "author", json = "public/api/blog.json" ) ---
            <div class="post">
                <div class="post-title"><a href="--- loop.uri ---">--- loop.author ---</a></div>
            </div>
        --- endloop ---
    </div>
</section>
