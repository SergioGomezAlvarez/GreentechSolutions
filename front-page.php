<?php get_header(); ?>

<section class="hero-section">
    <div class="hero-content">
        <h1>Welkom bij <span class="highlight">GreenTech Solutions</span></h1>
        <p>
            GreenTech Solutions streeft ernaar om hun huidige website over te zetten naar het WordPress-platform
            om het beheer van content toegankelijker en flexibeler te maken.
            Een belangrijk doel is om een gebruiksvriendelijke interface te bieden
            waarmee niet-technische medewerkers eenvoudig pagina's, blogs en andere inhoud kunnen bewerken en toevoegen.
        </p>

        <div class="hero-buttons">
            <a href="#" class="btn">Lees meer</a>
            <a href="#" class="btn btn-outline">Onze diensten</a>
        </div>
    </div>
</section>

<main class="main-content">
    <section class="latest-posts">
        <h2>Laatste Artikelen</h2>

        <div class="posts-grid">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                <?php endwhile; else: ?>
                <p>Geen berichten gevonden.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>