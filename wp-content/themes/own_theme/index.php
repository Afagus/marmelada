<?php get_header() ?>
<div class="top-section">

    <div class="container">
        <h1><a href="<?php echo site_url();?>">המדריך למוכרים בלבד</a></h1>
        <p> טיפים חשובים לניהול חנות אונליין</p>
    </div>
</div>
<div class="main-page-blog">
    <div class="container">

        <div class="blog-content">
            <?php
            if (have_posts()) {
                while (have_posts()):
                    the_post();?>
                    <div class="item">
                        <a href="#" class="wrapper-img"><img
                                src="<?php echo get_the_post_thumbnail_url() ?>"
                                alt=""></a>
                        <div class="text-block-blog">
                            <span class="data"><?php the_time('Y, F j'); ?></span>
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

                            <p><?php the_content(); ?></p>
                            <a href="<?php the_permalink();?>">המאמר המלא</a>
                        </div>
                    </div>
                <?php endwhile;
            } else {
                // Постов не найдено
            }
            ?>
            <?php the_posts_pagination() ?>
        </div>
        <aside class="side-section">
            <?php get_sidebar('ownsidebar')?>
        </aside>
    </div>
</div>
</div>
<?php get_footer() ?>
