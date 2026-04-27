<?php get_header(); ?>

<main>
    <!-- Banner -->
    <section id="banner" class="hero-section">
        <div class="hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logowhite.png" alt="BioMec Logo" class="hero-logo" />
            <h2>BioMedical Engineering & Computing Team</h2>
            <p>University of Western Macedonia<br />Since 2025</p>
        </div>
        <a href="#one" class="goto-next scrolly">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png" alt="Next">
        </a>
    </section>

    <!-- One -->
    <section id="one" class="spotlight style1 bottom">
        <span class="image fit main">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ZEP_campus_big.jpg" alt="" />
        </span>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-12-medium">
                        <header>
                            <h2>Ποιοι Είμαστε;</h2>
                            <ul class="actions">
                                <li><a href="<?php echo home_url('/about_us'); ?>" class="button">Δείτε Περισσότερα</a></li>
                            </ul>
                        </header>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p style="text-align: justify;">Η φοιτητική μας ομάδα ιδρύθηκε τον Μάρτιο του 2025 από ομάδα φοιτητών του τμήματος Η.Μ.Μ.Υ. της Πολυτεχνικής Σχολής του Πανεπιστημίου Δυτικής Μακεδονίας. Αποτελεί τη πρώτη, σε πανελλήνιο επίπεδο, που εξειδικεύεται στη Βιοϊατρική Μηχανική αναγνωρίζοντας τη καθιέρωσή της ως καταλύτη προόδου.</p>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p style="text-align: justify;">Η ομάδα μας επιθυμεί να συνδυάσει τη τεχνολογία αιχμής και τη μηχανική προκειμένου να προτείνει λύσεις με άμεσες πρακτικές εφαρμογές που στοχεύουν στη βελτίωση του βιοτικού επιπέδου.</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#two" class="goto-next scrolly">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="Next">
        </a>
    </section>

    <!-- Two -->
    <section id="two" class="spotlight style2 right">
        <span class="image fit main">
            <img src="<?php echo get_template_directory_uri(); ?>/images/elec_05.jpg" alt="" />
        </span>
        <div class="content">
            <header>
                <h2>Τα Project μας</h2>
            </header>
            <p style="text-align: justify;">Μέσα από διεπιστημονικά project που συνδυάζουν τη μηχανική, την υπολογιστική ιατρική, τη μηχανική μάθηση, την ηλεκτρονική και την νευροεπιστήμη, σχεδιάζουμε και
						υλοποιούμε εφαρμογές με θετικό αντίκτυπο στην καθημερινότητα ανθρώπων. Κάθε χρόνο εστιάζουμε σε ένα νέο πρόβλημα,
						αναπτύσσοντας λειτουργικά πρωτότυπα που προάγουν την προσβασιμότητα, την ανεξαρτησία και τη βελτίωση της ποιότητας ζωής</p>
			<ul class="actions">
                <li><a href="<?php echo home_url('/left-sidebar'); ?>" class="button">Δείτε Περισσότερα</a></li>
            </ul>
        </div>
        <a href="#three" class="goto-next scrolly">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="Next">
        </a>
    </section>

    <!-- Three -->
    <section id="three" class="spotlight style3 left">
        <span class="image fit main bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/elec_04.jpg" alt="" />
        </span>
        <div class="content">
            <header>
                <h2>Η Ομάδα μας</h2>
            </header>
			    <p style="text-align: justify;">Η ομάδα μας αποτελείται απο 30 μέλη, φοιτητές / φοιτήτριες, κυρίως των τμημάτων Ηλεκτρολόγων Μηχανικών και Μηχανικών Υπολογιστών και Μηχανολόγων Μηχανικών της Πολυτεχνικής Σχολής του Π.Δ.Μ. Απαρτιζόμαστε απο τρία 3 Divisions:</p>
				    <ol>
  						<li>
    						Technical
    						<ul>
      						    <li>Electronics</li>
      							<li>SPAA</li>
								<li>Construction</li>
    						</ul>
  						</li>
  						<li>
    						Research
    						<ul>
      							<li>Computational Medicine</li>
      							<li>Project Development</li>
    						</ul>
  						</li>
 						<li>
    						Promotion
    						<ul>
      							<li>Sponsorhips</li>
      							<li>Social Media</li>
    						</ul>
  						</li>
					</ol>
            <ul class="actions">
                <li><a href="<?php echo home_url('/members'); ?>" class="button">Δείτε Περισσότερα</a></li>
            </ul>
        </div>
        <a href="#home-footer" class="goto-next scrolly">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="Next">
        </a>
    </section>
</main>

<?php get_template_part('footer', 'home'); ?>
