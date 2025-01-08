<!DOCTYPE html>
<html lang="en"--- if( dark_mode ) --- class="dark-mode"--- endif --->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>--- if( page_title ) ------ metadata.page_title --- - --- endif ------ if( site_title ) ------ metadata.site_title ------ endif ---</title>

        <link rel="stylesheet" type="text/css" href="/assets/css/global.css">

        <?php if( isset( $metadata[ 'stylesheets' ] ) ): ?>
            <?php foreach( explode( '::', $metadata[ 'stylesheets' ] ) as $stylesheet ): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </head>

    <body>
        <input type="checkbox" id="staticphp_nav_toggle">

        <div class="staticphp">
            <div class="header">
                <div class="container">
                    <div class="title"><label for="staticphp_nav_toggle" id="staticphp_nav_toggle_label">&#8801;</label> <a href="/">StaticPHP</a> <div class="nothing">&nbsp;</div></div>

                    <nav>
                        <a href="/"--- if( staticphp_nav_item == "home" ) --- class="current"--- endif --->Home</a>
                        <a href="/features"--- if( staticphp_nav_item == "features" ) --- class="current"--- endif --->Features</a>
                        <a href="/docs"--- if( staticphp_nav_item == "docs" ) --- class="current"--- endif --->Docs</a>
                        <a href="/download"--- if( staticphp_nav_item == "download" ) --- class="current"--- endif --->Download</a>
                    </nav>
                </div>
            </div>
