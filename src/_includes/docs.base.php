---
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>--- metadata.title --- - StaticPHP Docs</title>
        
        <link rel="stylesheet" type="text/css" href="https://webfonts.staticly.cc/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/docs.css">
    </head>
    <body>
        <div class="container">
            <div class="sidebar">
                <h1><a href="/docs">StaticPHP Docs</a></h1>

                <?php

                $navitems[] = array
                (
                    "id" => "getting-started",
                    "url" => "/docs/getting-started",
                    "text" => "Getting Started"
                );

                $navitems[] = array
                (
                    "id" => "metadata",
                    "url" => "/docs/metadata",
                    "text" => "MetaData"
                );

                $navitems[] = array
                (
                    "id" => "php-files",
                    "url" => "/docs/php-files",
                    "text" => "PHP Files"
                );

                $navitems[] = array
                (
                    "id" => "html-files",
                    "url" => "/docs/html-files",
                    "text" => "HTML Files"
                );

                $navitems[] = array
                (
                    "id" => "functional-blocks",
                    "url" => "/docs/functional-blocks",
                    "text" => "Functional Blocks"
                );

                ?>

                <nav>
                    <?php foreach( $navitems as $navitem ): ?>
                        <a href="<?php echo $navitem['url']; ?>"<?php if( isset( $metadata['current_nav_item'] ) && $metadata['current_nav_item'] == $navitem['id'] ) echo ' class="current"'; ?>><?php echo $navitem['text']; ?></a>
                    <?php endforeach; ?>
                </nav>
            </div>

            <div class="content">
                {{ content }}

                <div class="footer">
                    <p>Site built and deployed using <a href="https://github.com/DavidHunterScot/StaticPHP-Docs" target="_blank">source code on GitHub</a>.</p>
                    <p><a href="/">StaticPHP Website</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
