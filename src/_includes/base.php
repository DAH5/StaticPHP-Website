---
site_title: StaticPHP
site_tagline: A Static Site Generator written in PHP. It turns source PHP files into static HTML files.
site_author: David Hunter
site_author_url: https://davidhunter.scot/
images_url: https://images.storage.ict.rocks
content_placeholder: {{ content }}
---
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $metadata['page_title'] ) && $metadata['page_title'] ) echo '--- metadata.page_title --- - '; ?><?php echo $metadata['site_title']; ?><?php if( ! isset( $metadata['page_title'] ) || ! $metadata['page_title'] ) echo ' - ' . $metadata['site_tagline']; ?></title>

        <link rel="stylesheet" type="text/css" href="https://webfonts.staticly.cc/poppins/poppins.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    </head>
    
    <body class="w3-light-gray">
        <header>
            <div class="container">
                <h1><a href="/">--- metadata.site_title ---</a></h1>
            </div>
        </header>

        <?php

        $main_nav_items[] = array
        (
            "id" => "home",
            "text" => "Home",
            "url" => "/",
        );
        
        $main_nav_items[] = array
        (
            "id" => "about",
            "text" => "About",
            "url" => "/about",
        );

        $main_nav_items[] = array
        (
            "id" => "docs",
            "text" => "Docs",
            "url" => "/docs",
        );

        ?>

        <nav class="main">
            <div class="container">
                <?php foreach( $main_nav_items as $main_nav_item ): ?>
                    
                <a href="<?php echo $main_nav_item['url']; ?>"<?php if( isset( $metadata['current_page'] ) && $metadata['current_page'] == $main_nav_item['id'] ) echo ' class="current"'; if( substr( $main_nav_item['url'], 0, 7 ) == "http://" || substr( $main_nav_item['url'], 0, 8 ) == "https://" ) echo ' target="_blank"'; ?>><?php echo $main_nav_item['text']; ?></a>
                
                <?php endforeach; ?>
            </div>
        </nav>

        <section class="content">
            <div class="container">
                {{ content }}
            </div>
        </section>

        <footer>
            <div class="container">
                <p class="small">Copyright &copy; <a href="<?php echo $metadata['site_author_url']; ?>" target="_blank" style="text-decoration: none;"><?php echo $metadata['site_author']; ?></a>.</p>
                <p class="tiny">Site built and deployed from <a href="https://github.com/DavidHunterScot/StaticPHP-Website" target="_blank">Source Code on GitHub</a>.</p>
            </div>
        </footer>
    </body>
</html>
