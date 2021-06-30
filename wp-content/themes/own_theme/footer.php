<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-content-copyright">
                <?php $value = get_option('marmelada_api_settings');
                echo $value['marmelada_api_text_field_0'];
                ?>
                <?php echo '@' . date('Y'); ?>
            </div>


            <?php $value = get_option('marmelada_api_settings');
            $doDisplay = $value['marmelada_api_social_field_facebook']
            ?>
            <div class="footer-content-social">
                <?php if ($doDisplay): ?>
                    <div class="facebook">
                        <a href="<?= $doDisplay ?>" target="_blank"><img
                                    src="https://img.icons8.com/doodle/48/000000/facebook-circled.png"/></a>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>