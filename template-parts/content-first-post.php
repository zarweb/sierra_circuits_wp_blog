<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="first-post-wrapp">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <?php blog_post_thumbnail(); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="date-box">
                        <?php if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta">
                                <?php blog_posted_on(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <header class="entry-header">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif; ?>
                    </header>
                    <div class="content-box">
                        <div class="entry-content">
                            <?php
                            the_content( sprintf(
                                wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blog' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                get_the_title()
                            ) );

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blog' ),
                                'after'  => '</div>',
                            ) );
                            ?>
                        </div><!-- .entry-content -->
                        <div class="social-box">
                            <?php echo do_shortcode('[Sassy_Social_Share]');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->