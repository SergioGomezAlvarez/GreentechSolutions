<section id="sidebar">

    <!-- Intro -->
    <section id="intro">
        <header>
            <h2>GreenTech Solutions</h2>
            <p>Lorem Ipsum</p>
        </header>
    </section>

    <!-- Mini Posts -->
    <section>
        <div class="mini-posts">
            <?php
            $recent_posts = new WP_Query([
                'posts_per_page' => 4,
                'post_status' => 'publish',
            ]);

            if ($recent_posts->have_posts()):
                while ($recent_posts->have_posts()):
                    $recent_posts->the_post(); ?>
                    <article class="mini-post">
                        <header>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <time class="published" datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date('F j, Y'); ?>
                            </time>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                                <?php echo get_avatar(get_the_author_meta('ID'), 48); ?>
                            </a>
                        </header>

                        <a href="<?php the_permalink(); ?>" class="image">
                            <?php if (has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail('large'); ?></a>
                            <?php endif; ?>
                        </a>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p>No recent posts found.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Posts List -->
    <section>
        <ul class="posts">
            <?php
            $list_posts = new WP_Query([
                'posts_per_page' => 5,
                'offset' => 4,
                'post_status' => 'publish',
            ]);

            if ($list_posts->have_posts()):
                while ($list_posts->have_posts()):
                    $list_posts->the_post(); ?>
                    <li>
                        <article>
                            <header>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <time class="published" datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date('F j, Y'); ?>
                                </time>
                            </header>
                            <a href="<?php the_permalink(); ?>" class="image">
                                <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"
                                        class="image featured"><?php the_post_thumbnail('large'); ?></a>
                                <?php endif; ?>
                            </a>
                        </article>
                    </li>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </ul>
    </section>

    <!-- About -->
    <section class="blurb">
        <h2>About</h2>
        <p><?php bloginfo('description'); ?></p>
        <ul class="actions">
            <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="button">Learn More</a></li>
        </ul>
    </section>

</section>