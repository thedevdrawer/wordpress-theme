<footer class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <?php if(is_active_sidebar('footer_left')) : ?>
                <div class="col">
                    <?php dynamic_sidebar( 'footer_left' ); ?>
                    <br>
                </div>
            <?php endif; ?>
            <?php if(is_active_sidebar('footer_center')) : ?>
                <div class="col">
                    <?php dynamic_sidebar( 'footer_center' ); ?>
                    <br>
                </div>
            <?php endif; ?>
            <?php if(is_active_sidebar('footer_right')) : ?>
                <div class="col">
                    <?php dynamic_sidebar( 'footer_right' ); ?>
                    <br>
                </div>
            <?php endif; ?>
        </div>
        <div class="row footerbottom">
            <div class="col">
                Copyright <?php echo date('Y'); ?> &copy; <a href="<?php esc_url(home_url( '/')); ?>"><?php echo tr_options_field('tr_theme_options.company_name_test'); ?></a>
            </div>
            <div class="col-md-6 text-right">
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'footer',
                    'depth'           => 1,
                    'container'       => 'div',
                    'container_class' => 'text-right'
                ) );
            ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>