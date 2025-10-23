<?php get_header(); ?>

<div id="main">
    <?php get_sidebar(); ?>

    <div id="main-content">

        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <article class="post">
                    <header>
                        <div class="title">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div class="meta">
                            <time class="published"
                                datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                                <span class="name"><?php the_author(); ?></span>
                                <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
                            </a>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="image featured">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    <?php endif; ?>

                    <?php the_excerpt(); ?>

                    <footer>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
                        </ul>
                    </footer>
                </article>
            <?php endwhile; endif; ?>


        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>