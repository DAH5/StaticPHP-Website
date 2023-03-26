<?php include __DIR__ . DIRECTORY_SEPARATOR . 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . ' - '; ?><?php echo $site_title; ?><?php if( ! isset( $page_title ) || ! $page_title ) echo ' - ' . $site_tagline; ?></title>

        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'stylesheets.php'; ?>
        
    </head>
    
    <body class="w3-light-gray">
        <header class="w3-deep-purple w3-padding-32">
            <div class="w3-auto w3-padding">
                <div class="w3-row">
                    <div class="w3-col s6 m3">
                        <h1 class="w3-hide"><?php echo $site_title; ?></h1>
                        <span class="w3-xlarge"><a href="/" style="text-decoration: none;"><?php echo $site_title; ?></a></span>
                        <br>
                        <span class="w3-tiny">by <a href="<?php echo $site_author_url; ?>" target="_blank" style="text-decoration: none;"><?php echo strtoupper( $site_author ); ?></a></span>
                    </div>
                </div>
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
            "id" => "getting-started",
            "text" => "Getting Started",
            "url" => "/getting-started",
        );

        ?>

        <nav class="w3-purple">
            <div class="w3-auto">
                <div class="w3-bar">

                    <?php foreach( $main_nav_items as $main_nav_item ): ?>
                        
                    <a href="<?php echo $main_nav_item['url']; ?>" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><?php if( isset( $current_page ) && $current_page == $main_nav_item['id'] ) echo '<b>' . $main_nav_item['text'] . '</b>'; else echo $main_nav_item['text']; ?></a>
                    
                    <?php endforeach; ?>

                </div>
            </div>
        </nav>

        <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>

        <footer class="w3-topbar w3-border-purple w3-deep-purple">
            <div class="w3-auto w3-padding">
                <p class="w3-small">Copyright &copy; <a href="<?php echo $site_author_url; ?>" target="_blank" style="text-decoration: none;"><?php echo $site_author; ?>.</a></p>
                <p class="w3-tiny">Site built and deployed from <a href="https://github.com/DavidHunterScot/StaticPHP-Website" target="_blank">Source Code on GitHub</a>.</p>
            </div>
        </footer>
    </body>
</html>
