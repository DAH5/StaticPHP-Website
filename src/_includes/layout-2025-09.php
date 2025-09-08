<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>--- if( page_title ) ------ metadata.page_title --- - --- endif ------ if( docs_nav_item ) ---Docs - --- endif ---StaticPHP</title>

        <link rel="stylesheet" href="/assets/css/staticphp-2025-09.css">
    </head>

    <body>
        <input type="checkbox" id="staticphp_docs_nav_toggle">

        <header class="small">
            <div class="container">
                <nav>
                    <a href="https://weburl.net/github/staticphp" target="_blank">GitHub</a>
                    <a href="https://weburl.net/gitlab/staticphp" target="_blank">GitLab</a>
                </nav>
            </div>
        </header>

        <header>
            <div class="container">
                <nav>
                    <h1><a href="/"><span class="static">Static</span><span class="php">PHP</span></a></h1>
                    <a href="/features.html"--- if( staticphp_nav_item == "features" ) --- class="current"--- endif --->Features</a>
                    <a href="/docs"--- if( docs_nav_item ) --- class="current"--- endif --->Docs</a>
                </nav>

                <nav class="buttons">
                    <a href="/download.html" class="button secondary">Download</a>
                    <a href="/docs/Getting-Started.html" class="button primary">Getting Started</a>
                </nav>
            </div>
        </header>

        <?php if( isset( $metadata[ 'docs_nav_item' ] ) ): ?>
        <section class="doc">
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

                <main>
        <?php endif; ?>

        {{ content }}

        <?php if( isset( $metadata[ 'docs_nav_item' ] ) ): ?>
                </main>
            </div>
        </section>
        <?php endif; ?>

        <footer>
            <div class="container">
                <p>Copyright &copy; <a href="https://weburl.net/davidhunter" target="_blank">David Hunter</a>. Powered by StaticPHP.</p>
            </div>
        </footer>

        --- if( javascript_url ) ---
        <script type="text/javascript" src="--- metadata.javascript_url ---"></script>
        --- endif ---
    </body>
</html>