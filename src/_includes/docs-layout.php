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
            <a href="/docs/Getting-Started.html"--- if( docs_nav_item == "getting-started" ) --- class="current"--- endif --->Getting Started</a>
            <a href="/docs/MetaData.html"--- if( docs_nav_item == "metadata" ) --- class="current"--- endif --->MetaData</a>
            <a href="/docs/Functional-Blocks.html"--- if( docs_nav_item == "functional-blocks" ) --- class="current"--- endif --->Functional Blocks</a>
            <a href="/docs/Customisation.html"--- if( docs_nav_item == "customisation" ) --- class="current"--- endif --->Customisation</a>
            <a href="/docs/HTML-Files.html"--- if( docs_nav_item == "html-files" ) --- class="current"--- endif --->HTML Files</a>
            <a href="/docs/PHP-Files.html"--- if( docs_nav_item == "php-files" ) --- class="current"--- endif --->PHP Fils</a>
            <a href="/docs/Markdown-Files.html"--- if( docs_nav_item == "markdown-files" ) --- class="current"--- endif --->Markdown Files</a>
            <a href="/docs/Redirections.html"--- if( docs_nav_item == "redirections" ) --- class="current"--- endif --->Redirections</a>
            <a href="/docs/Remote-Content.html"--- if( docs_nav_item == "remote-content" ) --- class="current"--- endif --->Remote Content</a>
            <a href="/docs/Testing.html"--- if( docs_nav_item == "testing" ) --- class="current"--- endif --->Testing</a>
        </nav>

        <div class="content">
            {{ content }}
        </div>
    </div>
</div>

<?php include __DIR__ . DIRECTORY_SEPARATOR . 'footer.php'; ?>
