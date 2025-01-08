---
content_placeholder: {{ content }}
stylesheets: /assets/css/staticphp.css
site_title: Docs - StaticPHP
staticphp_nav_item: docs
---

<?php include __DIR__ . DIRECTORY_SEPARATOR . 'header.php'; ?>

<input type="checkbox" id="staticphp_docs_nav_toggle">

<div class="docs">
    <div class="container">
        <div class="mobile-nav-header">
            <label for="staticphp_docs_nav_toggle" id="staticphp_docs_nav_toggle_label">&#8801;</label>

            <p><b><a href="/docs">Documentation</a></b></p>

            <div class="nothing">&nbsp;</div>
        </div>

        <nav>
            <a href="/docs/getting-started"--- if( docs_nav_item == "getting-started" ) --- class="current"--- endif --->Getting Started</a>
            <a href="/docs/metadata"--- if( docs_nav_item == "metadata" ) --- class="current"--- endif --->MetaData</a>
            <a href="/docs/functional-blocks"--- if( docs_nav_item == "functional-blocks" ) --- class="current"--- endif --->Functional Blocks</a>
            <a href="/docs/customisation"--- if( docs_nav_item == "customisation" ) --- class="current"--- endif --->Customisation</a>
            <a href="/docs/html-files"--- if( docs_nav_item == "html-files" ) --- class="current"--- endif --->HTML Files</a>
            <a href="/docs/php-files"--- if( docs_nav_item == "php-files" ) --- class="current"--- endif --->PHP Fils</a>
            <a href="/docs/markdown-files"--- if( docs_nav_item == "markdown-files" ) --- class="current"--- endif --->Markdown Files</a>
            <a href="/docs/redirections"--- if( docs_nav_item == "redirections" ) --- class="current"--- endif --->Redirections</a>
        </nav>

        <div class="content">
            {{ content }}
        </div>
    </div>
</div>

<?php include __DIR__ . DIRECTORY_SEPARATOR . 'footer.php'; ?>
