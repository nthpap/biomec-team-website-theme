<?php get_header(); ?>

<main>
    <?php
    if ( is_front_page() ) {
        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        }
    } elseif ( is_page('about-us') ) {
    get_template_part('about_us');           // φορτώνει about-us.php
    } elseif ( is_page('left-sidebar') ) {
        get_template_part('left-sidebar');   // φορτώνει left-sidebar.php
    } elseif ( is_page('members') ) {
        get_template_part('members');        // φορτώνει members.php
    } elseif ( is_page('sponsors') ) {
        get_template_part('sponsors');       // φορτώνει sponsors.php
    } else {
        if ( have_posts() ) {
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        }
    }
    ?>
</main>

<?php
if ( is_front_page() ) {
    get_template_part('footer', 'home');    // ειδικό footer για αρχική
} else {
    get_footer();                           // κανονικό footer
}
?>
