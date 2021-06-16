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

<!--                <p>בהמשך לעדכונים האחרונים – החל מהיום, ולמשך שבועיים, לא תוכלו לבצע פעולות בחנותכם. פעולות רכישה וקניה-->
<!--                    יתאפשרו כרגיל.</p>-->
<!--                <p>ובינתיים, אתם מוזמנים להיכנס לחנותכם בממשק החדש!&nbsp;להתרשם, להכיר ולהתרגל (:</p>-->
<!--                <p>תוכלו לבצע פעולות בממשק החדש (להעלות מוצרים וכו’)&nbsp;– רק זכרו כל שינוי שתבצעו יבוא לידי ביטוי-->
<!--                    בחנות כשנעלה לאוויר.</p>-->
<!--                <p><strong>איך עושים את זה?</strong></p>-->
<!--                <p><a href="#" target="_blank">">נכנסים ללינק הזה &gt;&gt;</a></p>-->
<!--                <p>ומזינים את שם המשתמש והסיסמה&nbsp;שלכם מהממשק הישן.</p>-->
<!--                <p>במידה ולא הצלחתם להיכנס – בצעו שחזור סיסמה.</p>-->
<!--                <p><strong>אחרי שתיכנסו לממשק החדש אנחנו ממליצים:</strong></p>-->
<!--                <ol>-->
<!--                    <li>-->
<!--                        <h4><strong>הגדרות חנות.</strong>&nbsp;להיכנס להגדרות החנות ולוודא שכל הפרטים שלכם מעודכנים כמו-->
<!--                            שצריך (מדיניות החנות, מדיניות משלוחים, כתובת החנות וכו’)</h4>-->
<!--                    </li>-->
<!--                </ol>-->
<!--                <ol>-->
<!--                    <li value="2">-->
<!--                        <h4><strong>סליקה</strong>. לבדוק שיש לכם ספק סליקה פעיל. זאת תוכלו לבדוק בטאב – “הגדרות חנות-->
<!--                            סליקה” – שנמצא מצד שמאל למעלה.</h4>-->
<!--                    </li>-->
<!--                </ol>-->
<!--                <ol>-->
<!--                    <li value="3">-->
<!--                        <h4><strong>משלוחים</strong>. שדרגנו את מנגנון המשלוחים וכעת במקום להגדיר שיטת משלוח לכל מוצר –-->
<!--                            עליכם להגדיר ראשית את הסכום הקבוע עבור כל שיטת משלוח. אחר כך תגדירו לכל מוצר איזה שיטת משלוח-->
<!--                            אפשרית לו.</h4>-->
<!--                        <p>4. והכי חשוב – יש בממשק הדרכה אונליין. כדי להגיע אליה צריך ללחוץ על כפתור HELP מצמד ימין-->
<!--                            למטה. שם תבחרו את ההדרכה הנחוצה לכם מתוך התהליכים המרכזיים בניהול החנות.</p>-->
<!--                    </li>-->
<!--                </ol>-->
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