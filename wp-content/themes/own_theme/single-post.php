<?php get_header(); ?>
    <div class="top-section">

        <div class="container">
            <h1><a href="<?php echo get_home_url() ?>">המדריך למוכרים בלבד</a></h1>
            <p> טיפים חשובים לניהול חנות אונליין</p>
        </div>
    </div>
    <div class="bread-crumbs-section">
        <div class="container">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://marmelada/">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>

            <a href="#">ראשי</a><span class=""></span>
            <a href="#">הודעות למוכרים</a><span class=""></span>
            <span class="kb_title">יש לכם גישה חדשה</span></div>
    </div>
    <div class="main-page-blog">
        <div class="container">
            <div class="blog-content">
                <span class="data"><?php the_time('Y. F . m'); ?></span>
                <h2><?php the_title() ?></h2>
                <h4><img src="<?php echo get_the_post_thumbnail_url() ?>"></h4>
                <p>&nbsp;</p>
                <?php the_post();
                the_content();
                echo get_post_meta($post->ID, 'metatest', true);
                ?>

                <?php  comments_template(); ?>

            </div>

            <aside class="side-section">
                <?php get_sidebar('ownsidebar') ?>
            </aside>
        </div>
    </div>

    </div>
<?php get_footer(); ?>