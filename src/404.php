---
page_title: Not Found (404)
---
<?php

$friendly_urls = false;

$page_content = function()
{
?>

<section class="w3-padding-32">
    <div class="w3-content w3-padding">
        <h2>Not Found <b><i>404</i></b></h2>
        <p>There is nothing to be found here. You can try again or go to the <a href="/">home</a> page.</p>
    </div>
</section>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
