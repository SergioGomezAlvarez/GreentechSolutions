<?php get_header(); ?>

<div id="main">

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <article class="post">

                <!-- Post Header -->
                <header>
                    <div class="title">
                        <h2><?php the_title(); ?></h2>

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

                <!-- Featured Image -->
                <?php if (has_post_thumbnail()): ?>
                    <span class="image featured"><?php the_post_thumbnail('large'); ?></span>
                <?php endif; ?>

                <!-- Full Content -->
                <div class="content">
                    <?php the_content(); ?>
                </div>

                <!-- Footer -->
                <footer>
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

            <!-- Comments Section -->
            <?php if (comments_open() || get_comments_number()):
                comments_template();
            endif; ?>

        <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>