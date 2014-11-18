<div class="top-bar-container contain-to-grid show-for-medium-up" role="navigation">
    <nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
        <div class='site-logo'>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
        </div>
        <?php else : ?>
    	<li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </li>
        <?php endif; ?>
            
        </ul>
        
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l(); ?>
            <?php foundationPress_top_bar_r(); ?>
        </section>
    </nav>
</div>