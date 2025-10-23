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
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="meta">
                            <time class="published" datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                            <a href="#" class="author">
                                <span class="name"><?php the_author(); ?></span>
                                <?php echo get_avatar(get_the_author_meta('ID'), 64); ?>
                            </a>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()): ?>
                        <span class="image featured"><?php the_post_thumbnail('large'); ?></span>
                    <?php endif; ?>

                    <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>