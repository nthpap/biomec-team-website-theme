<?php
/* Template Name: Members */
get_header();
?>

<main id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>Γνωρίστε τα Μέλη μας</h2>
        </header>

       <?php /* Management Team */ ?>
        <div class="team-divider">Management</div>

        <div class="team-grid">
            <div class="team-member lead-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Nikolaos_Th_Papadopoulos.png" alt="Team Lead">
                <h4 class="lead-name">Nikolaos Th. Papadopoulos</h4>
                <p>Team Lead,</p><p> Chief of Research</p>
                <div class="member-links">
                    <a href="https://gr.linkedin.com/in/nikolaos-theodoros-papadopoulos" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/N_Th_Papadopoulos_CV.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Markos_G_Tsipouras.jpg" alt="Scientific Supervisor">
                <h4>Dr. Markos G. Tsipouras</h4>
                <p>Scientific Supervisor</p>
                <div class="member-links">
                    <a href="https://gr.linkedin.com/in/markos-tsipouras-404b9758" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/cv_Τσίπουρας.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>

            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Ioannis_Ntakoulas.png" alt="Project Manager">
                <h4>Ioannis Ntakoulas</h4>
                <p>Chief of Technical, Head of SPAA</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/ioannis-ntakoulas-22a3773b6" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/CV_Ntakoulas.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Athanasios_Sdougkos.png" alt="Member">
                <h4>Athanasios Sdougkos</h4>
                <p>Head of Electronics</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/athanasios-sdougkos-540a5b368" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/CV_Sdougkos.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>

            <?php /* <div class="team-member"> ... commented out </div> */ ?>

            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Pantelis_Veligradiotis.png" alt="Member">
                <h4>Pantelis Veligradiotis</h4>
                <p>Head of Construction</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>

            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Nikolaos_Moutsakis.png" alt="Member">
                <h4>Nikolaos Moutsakis</h4>
                <p>Chief of Promotion</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/nikolaos-moutsakis-15a31b30b" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
        </div>

        <?php /* Electronics Subteam */ ?>
        <div class="team-divider">Electronics Subteam</div>
        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Athanasios_Sdougkos.png" alt="Head of a Subteam">
                <h4>Athanasios Sdougkos</h4>
                <p>Head of Electronics</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/athanasios-sdougkos-540a5b368" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/CV_Sdougkos.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Ioannis_Kyranoudis.jpeg" alt="Member">
                <h4>Ioannis Kyranoudis</h4>
                <p>Senior Electronics Engineer</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/giannis-kyranoudis-6bb488364" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Dimitrios_Spachis.png" alt="Member">
                <h4>Dimitrios Spachis</h4>
                <p>Mid Electronics Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Dimitrios_Poulos.jpeg" alt="Member">
                <h4>Dimitris Poulos</h4>
                <p>Mid Electronics Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Eirini_Frygadioti.png" alt="Member">
                <h4>Eirini Frygadioti</h4>
                <p>Junior Electronics Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Pinelopi_Panterli.png" alt="Member">
                <h4>Pinelopi Panterli</h4>
                <p>Junior Electronics Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
        </div>

        <?php /* Signal Processing & Algorithm Analysis Subteam */ ?>
        <div class="team-divider">Signal Processing & Algorithm Analysis Subteam</div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Ioannis_Ntakoulas.png" alt="Head of a Subteam">
                <h4>Ioannis Ntakoulas</h4>
                <p>Head of SPAA</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/ioannis-ntakoulas-22a3773b6" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/CV_Ntakoulas.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Filippos_Tsosios.png" alt="Member">
                <h4>Filippos Tsosios</h4>
                <p>Senior SPAA Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Aggeliki_Fakali.png" alt="Member">
                <h4>Aggeliki Fakali</h4>
                <p>Senior SPAA Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Aggelos_Adamos.png" alt="Member">
                <h4>Aggelos Adamos</h4>
                <p>Mid SPAA Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Marios_Giannopoulos.png" alt="Member">
                <h4>Marios Giannopoulos</h4>
                <p>Mid SPAA Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
        </div>

        <?php /* Construction Subteam */ ?>
        <div class="team-divider">Construction Subteam</div>
        <div class="team-grid">
            <?php /* Empty initial grid */ ?>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Pantelis_Veligradiotis.png" alt="Member">
                <h4>Pantelis Veligradiotis</h4>
                <p>Head of Construction</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Vasiliki_Karagiorgi.png" alt="Member">
                <h4>Vasiliki Karagiorgi</h4>
                <p>Junior Mechanical Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
        </div>

        <?php /* Computational Medicine Subteam */ ?>
        <div class="team-divider">Computational Medicine Subteam</div>
        <div class="team-grid">
            <div class="team-member lead-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Nikolaos_Th_Papadopoulos.png" alt="Team Lead">
                <h4 class="lead-name">Nikolaos Th. Papadopoulos</h4>
                <p>Team Lead,</p><p> Chief of Research</p>
                <div class="member-links">
                    <a href="https://gr.linkedin.com/in/nikolaos-theodoros-papadopoulos" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/N_Th_Papadopoulos_CV.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Iro_Sotiriadou.jpeg" alt="Member">
                <h4>Iro Sotiriadou</h4>
                <p>Senior Engineer</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/iro-sotiriadou-a56391333" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Melina_Tzika.png" alt="Member">
                <h4>Melina Tzika</h4>
                <p>Mid Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pic09.png" alt="Member">
                <h4>Martha Eirini Kavouridou</h4>
                <p>Junior Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
        </div>

        <?php /* Project Development Subteam */ ?>
        <div class="team-divider">Project Development Subteam</div>
        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Ioannis_Ntakoulas.png" alt="Head of a Subteam">
                <h4>Ioannis Ntakoulas</h4>
                <p>Head of Project Development</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/ioannis-ntakoulas-22a3773b6" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                    <a href="<?php echo get_template_directory_uri(); ?>/cv/CV_Ntakoulas.pdf" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/link.png" alt="CV Icon">
                    </a>
                </div>
            </div>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Nikolaos_Petrou.png" alt="Member">
                <h4>Nikolaos Petrou</h4>
                <p>Senior Electrical Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Nikolaos_Zontanos.jpeg" alt="Member">
                <h4>Nikolaos Zontanos</h4>
                <p>Senior Mechanical Engineer</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Elenh_Giannakopoulou.png" alt="Member">
                <h4>Eleni Giannakopoulou</h4>
                <p>Mid Electrical Engineer</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/eleni-giannakopoulou-868045383" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Sofia_Patera.png" alt="Member">
                <h4>Sofia Patera</h4>
                <p>Mid Electrical Engineer</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/sofia-patera-23bbb933a" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
        </div>
        <?php /* Sponsorships & Social Media Subteam */ ?>
        <div class="team-divider">Sponsorships & Social Media Subteam</div>        
        <div class="team-grid">
            <?php /* Empty initial grid */ ?>
        </div>

        <div class="team-grid">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Nikolaos_Moutsakis.png" alt="Member">
                <h4>Nikolaos Moutsakis</h4>
                <p>Chief of Promotion</p>
                <div class="member-links">
                    <a href="https://www.linkedin.com/in/nikolaos-moutsakis-15a31b30b" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/members/Marialena_Dhmarakidou.jpeg" alt="Member">
                <h4>Marialena Dhmarakidou</h4>
                <p>Junior Social Media Member</p>
                <div class="member-links">
                    <?php /* Commented out links */ ?>
                </div>
            </div>
            <?php /* 
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pic09.png" alt="Member">
                <h4>Member Three</h4>
                <p>Role</p>
                <div class="member-links">
                    <a href="#" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pic09.png" alt="Member">
                <h4>Member Four</h4>
                <p>Role</p>
                <div class="member-links">
                    <a href="#" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/webicons/linkedin.png" alt="LinkedIn Icon">
                    </a>
                </div>
            </div>
            */ ?>
        </div>
    </div>
</main>

<?php
if ( is_front_page() ) {
    get_template_part('footer', 'home');
} else {
    get_footer();
}
