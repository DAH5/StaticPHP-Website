<?php include __DIR__ . DIRECTORY_SEPARATOR . 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php if( isset( $page_title ) && $page_title ) $page_title . ' - '; ?><?php echo $site_title; ?><?php if( ! isset( $page_title ) || $page_title ) echo ' - ' . $site_tagline; ?></title>
    </head>
    
    <body>
        
    </body>
</html>