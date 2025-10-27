<?php get_header(); ?>

<div id="main">

    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>

            <article class="post">

                <!-- Post Header -->
                <header>
                    <div class="title">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <?php if (has_excerpt()): ?>
                            <p><?php echo esc_html(get_the_excerpt()); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="meta">
                        <time class="published" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>

                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="author">
                            <span class="name"><?php the_author(); ?></span>
                            <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
                        </a>
                    </div>
                </header>

                <!-- Post Content Preview -->
                <p><?php echo wp_kses_post(wp_trim_words(get_the_content(), 50, '...')); ?></p>

                <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="image featured">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                <?php endif; ?>

                <!-- Post Footer -->
                <footer>
                    <ul class="actions">
                        <li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
                    </ul>

                    <ul class="stats">
                        <?php
                        $categories = get_the_category();
                        if ($categories):
                            foreach ($categories as $cat):
                                printf(
                                    '<li><a href="%s">%s</a></li>',
                                    esc_url(get_category_link($cat->term_id)),
                                    esc_html($cat->name)
                                );
                            endforeach;
                        endif;
                        ?>
                        <li><span class="icon solid fa-heart"></span></li>
                        <li><span class="icon solid fa-comment"> <?php echo get_comments_number(); ?></span></li>
                    </ul>
                </footer>
            </article>

        <?php endwhile; ?>

        <!-- Pagination -->
        <ul class="actions pagination">
            <li><?php previous_posts_link('<span class="button large previous">Previous Page</span>'); ?></li>
            <li><?php next_posts_link('<span class="button large next">Next Page</span>'); ?></li>
        </ul>

    <?php else: ?>
        <p>No posts found.</p>
    <?php endif; ?>

</div>

<?php get_sidebar(); ?>