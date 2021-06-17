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
?>
            </div>

            <aside class="side-section">
                <?php wp_nav_menu(array(
                    'theme_location' => 'aside-menu',
                    'menu' => '',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                )) ?>
                <div class="info-block">
                    <h3>היי... משהו חשוב:</h3>
                    <p>מעוניינים להגדיל את המכירות בחנות שלכם מבלי לעבוד קשה מדי? בדקו את ה-תוכנית</p>
                    <a class="text-color" href="#" target="_blank">הקפצת המוצרים האוטומטית הטרייה והחדשה</a>
                </div>
            </aside>
        </div>
    </div>
    </div>
<?php get_footer(); ?>