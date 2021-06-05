<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php global $post?>
    <title><?php the_title()?></title>
    <?php wp_head();?>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="wrapper-header flex-section">
                <div class="menu-mobile">menu</div>
                <div class="logo-input-content flex-section">
                    <strong class="logo"><a href="<?php echo home_url()?>" target="_blank"><img src="<?= get_template_directory_uri()?>/assets/images/logo.png" alt=""></a></strong>
                    <div class="search-wrapper">
                        <?php get_search_form();?>
                    </div>
                </div>
                <a href="#" target="_blank">ממשק הניהול שלי</a>
            </div>
        </div>
    </header>
