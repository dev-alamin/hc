<?php 
    // Template Name: Blog Template
    get_header(); 
?>

<section class="heading-top">
    <div class="container">

        <?php if(!empty(carbon_get_theme_option('company_logo'))): ?>
            <a class="logo" href="<?php echo esc_url( home_url() ); ?>">
                <?php echo wp_get_attachment_image( carbon_get_theme_option('company_logo'), 'full', '',array( 'alt' => '', 'loading' => true, )  ); ?>
            </a>
        <?php endif ?>

        <div class="banner-right">
            <?php if(!empty(carbon_get_theme_option('email_address'))): ?>
                <a class="email" href="mailto::<?php echo carbon_get_theme_option('email_address'); ?>">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 4.5C5.20435 4.5 4.44129 4.81607 3.87868 5.37868C3.31607 5.94129 3 6.70435 3 7.5V7.8015L12 12.648L21 7.803V7.5C21 6.70435 20.6839 5.94129 20.1213 5.37868C19.5587 4.81607 18.7956 4.5 18 4.5H6ZM21 9.5055L12.3555 14.16C12.2462 14.2188 12.1241 14.2496 12 14.2496C11.8759 14.2496 11.7538 14.2188 11.6445 14.16L3 9.5055V16.5C3 17.2956 3.31607 18.0587 3.87868 18.6213C4.44129 19.1839 5.20435 19.5 6 19.5H18C18.7956 19.5 19.5587 19.1839 20.1213 18.6213C20.6839 18.0587 21 17.2956 21 16.5V9.5055Z" fill="black"/>
                    </svg>   
                    <?php echo esc_html_e('Say Hello','halalcateringl'); ?>
                </a>
            <?php endif ?>

            <?php if(!empty(carbon_get_theme_option('calendy_link'))): ?>
                <a class="btn-primary" href="<?php echo carbon_get_theme_option('calendy_link'); ?>"><?php echo esc_html_e('Ready to Scale ?','halalcateringl'); ?></a>
            <?php endif ?>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <?php the_content(); ?>
<?php endwhile ?>
<?php endif ?> 

<?php 
get_footer();