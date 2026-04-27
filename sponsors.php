<?php
/* Template Name: Sponsors */
get_header();
?>

<main id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>Οι Χορηγοί Μας</h2>
        </header>

        <section class="sponsor-section">
            <div class="sponsor-divider">Academia</div>
            <div class="sponsor-grid">
                <a href="https://www.uowm.gr/" class="sponsor-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/university/uowm-logo-en-inverted.png" alt="Academia Sponsor 1">
                </a>
                <a href="https://biomed.ece.uowm.gr/" class="sponsor-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/academia/biomed_1.png" alt="Academia Sponsor 2">
                </a>
            </div>

            <div class="sponsor-divider">Our Supporters</div>
            <div class="sponsor-grid">
                <a href="https://fasmaprint.com/" class="sponsor-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sponsors/supporters/Fasma_2.png" alt="Supporter 1">
                </a>
            </div>
        </section>
    </div>
</main>

<?php
// Επιλογή footer
if ( is_front_page() ) {
    get_template_part('footer', 'home');
} else {
    get_footer();
}
