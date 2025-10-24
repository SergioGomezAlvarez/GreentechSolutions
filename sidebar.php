<section id="sidebar">
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <h3 class="logo-text"><strong>GREENTECH</strong></h3>
        <h3 class="logo-text"><strong>SOLUTIONS</strong></h3>
    </a>
    
    <h2 class="widget-title">Recent Posts</h2>
    <ul class="mini-posts">
        <?php
        $recent_posts = wp_get_recent_posts([
            'numberposts' => 100,
            'post_status' => 'publish'
        ]);
        foreach ($recent_posts as $post): ?>
            <li>
                <a href="<?php echo get_permalink($post['ID']); ?>">
                    <?php if (has_post_thumbnail($post['ID'])): ?>
                        <img src="<?php echo get_the_post_thumbnail_url($post['ID'], 'thumbnail'); ?>"
                            alt="<?php echo esc_attr($post['post_title']); ?>" />
                    <?php endif; ?>
                    <div class="mini-post-content">
                        <span class="mini-title"><?php echo $post['post_title']; ?></span>
                        <span class="mini-excerpt"><?php echo wp_trim_words($post['post_excerpt'], 10); ?></span>
                    </div>
                </a>
            </li>
        <?php endforeach;
        wp_reset_query(); ?>
    </ul>
</section>