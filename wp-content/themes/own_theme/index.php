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
            <?



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


<!--            <div class="item">-->
<!--                <a href="#" class="wrapper-img"><img src="--><?//= get_template_directory_uri() ?><!--/assets/images/img1.jpg"-->
<!--                                                     alt=""></a>-->
<!--                <div class="text-block-blog">-->
<!--                    <span class="data">22 בדצמבר, 2019</span>-->
<!--                    <h2><a href="#">יש לכם גישה חדשה</a></h2>-->
<!--                    <p>&nbsp; בהמשך לעדכונים האחרונים – החל מהיום, ולמשך שבועיים, לא תוכלו לבצע פעולות בחנותכם. פעולות-->
<!--                        רכישה וקניה יתאפשרו כרגיל. ובינתיים, אתם מוזמנים להיכנס לחנותכם בממשק החדש!&nbsp;להתרשם, להכיר-->
<!--                        ולהתרגל (: תוכלו לבצע פעולות בממשק החדש (להעלות מוצרים וכו’)&nbsp;– רק זכרו כל שינוי שתבצעו יבוא-->
<!--                        לידי ביטוי בחנות כשנעלה לאוויר. איך עושים את זה? נכנסים ללינק הזה […]</p>-->
<!--                    <a href="#">המאמר המלא</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item">-->
<!--                <a href="#" class="wrapper-img"><img src="--><?//= get_template_directory_uri() ?><!--/assets/images/img2.jpg"-->
<!--                                                     alt=""></a>-->
<!--                <div class="text-block-blog">-->
<!--                    <span class="data">22 בדצמבר, 2019</span>-->
<!--                    <h2><a href="#">תגידו יפה שלום לממשק החדש שלכם</a></h2>-->
<!--                    <p>מוכרות ומוכרים יקרות ויקרים! &nbsp; בהמשך לבשורה המשמחת ששלחנו לכם בשבוע&nbsp;שעבר, אנחנו כאן כדי-->
<!--                        לעדכן שבקרוב ניכנס ליישורת האחרונה לפני שנעלה לאוויר עם ממשק הניהול החדש שלכם ושלנו. ביום שני-->
<!--                        23.12, נתחיל במהלך האחרון והקריטי לפני העלייה לאוויר, במסגרתו יועברו כל הנתונים האחרונים מהממשק-->
<!--                        הישן לממשק החדש. לכן, עד לסיום העברת הנתונים והשלמת המהלך – […]</p>-->
<!--                    <a href="#">המאמר המלא</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item">-->
<!--                <a href="#" class="wrapper-img"><img src="--><?//= get_template_directory_uri() ?><!--/assets/images/img3.jpg"-->
<!--                                                     alt=""></a>-->
<!--                <div class="text-block-blog">-->
<!--                    <span class="data">20 בנובמבר, 2019</span>-->
<!--                    <h2><a href="#">חושבים על מוצר חדש? קבלו 5 טיפים שיעזרו לכם להבריק</a></h2>-->
<!--                    <p>קחו רגע לקרוא את המדריך הבא – שיבטיח שהמוצר הבא שלכם יהיה מוצר מנצח</p>-->
<!--                    <a href="#">המאמר המלא</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item">-->
<!--                <a href="#" class="wrapper-img"><img src="--><?//= get_template_directory_uri() ?><!--/assets/images/img4.jpg"-->
<!--                                                     alt=""></a>-->
<!--                <div class="text-block-blog">-->
<!--                    <span class="data">19 בנובמבר, 2019</span>-->
<!--                    <h2><a href="#">רוצה למכור באינטרנט לקהל הישראלי? המדריך למתחילים</a></h2>-->
<!--                    <p>כל מה שצריך לדעת כדי להתחיל למכור את מה שאתם מעצבים, מייצרים או מייבאים באינטרנט. מה למכור? איך-->
<!--                        משיגים לקוחות? איך מתמחרים? איך שולחים? איך מקבלים פידבקים טובים שיימשכו עוד לקוחות? כל זאת ועוד-->
<!--                        במדריך שלפניכם</p>-->
<!--                    <a href="#">המאמר המלא</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item">-->
<!--                <a href="#" class="wrapper-img"><img src="--><?//= get_template_directory_uri() ?><!--/assets/images/img5.jpg"-->
<!--                                                     alt=""></a>-->
<!--                <div class="text-block-blog">-->
<!--                    <span class="data">18 בנובמבר, 2019</span>-->
<!--                    <h2><a href="#">טור אורח: איך לבנות תכנית עסקית חכמה?</a></h2>-->
<!--                    <p>תכנית עסקית מוצלחת היא הכרחית לכל עסק, קטן כגדול. איך עושים זאת? מהם היסודות לתכנית שכזאת? ואיך-->
<!--                        היא יכולה לתת לכם התחלה טובה יותר? טור אורח של ירון לוי, יועץ לעסקים קטנים ובינוניים והבעלים של-->
<!--                        לוי ייעוץ כלכלי ועסקי</p>-->
<!--                    <a href="#">המאמר המלא</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item">-->
<!--                <a href="#" class="wrapper-img"><img src="--><?//= get_template_directory_uri() ?><!--/assets/images/img6.jpg"-->
<!--                                                     alt=""></a>-->
<!--                <div class="text-block-blog">-->
<!--                    <span class="data">17 בנובמבר, 2019</span>-->
<!--                    <h2><a href="#">7 דרכים להרוויח לקוחות מרוצים</a></h2>-->
<!--                    <p>בחנות אינטרנטית, שירות הוא הכל - הוא מתחיל בתיאור מפורט של המוצר וממשיך גם לאחר שהמוצר כבר נשלח.-->
<!--                        אז איך לתת את השירות הכי טוב שיש? &nbsp;</p>-->
<!--                    <a href="#">המאמר המלא</a>-->
<!--                </div>-->
<!--            </div>-->
            <?php echo wp_link_pages(); ?>
            <?php the_posts_pagination() ?>
            <!--            <nav class="navigation pagination" role="navigation">-->
            <!--                <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>-->
            <!--                    <a class="page-numbers" href="#">2</a>-->
            <!--                    <a class="page-numbers" href="#">3</a>-->
            <!--                    <span class="page-numbers dots">…</span>-->
            <!--                    <a class="page-numbers" href="#">12</a>-->
            <!--                    <a class="next page-numbers" href="#">&gt;</a></div>-->
            <!--            </nav>-->
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
<?php get_footer() ?>
