<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-wrapper">
        <div class="row">
            <div class="col-md-2">
                <?php
                if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                        <?php blog_posted_on(); ?>
                    </div>
                <?php
                endif;
                ?>
            </div>
            <div class="col-md-6">
                <?php
                if ( is_singular() ) :
                    the_title( '<h3>', '</h3>' );
                else :
                    the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif; ?>
                <div class="entry-content">
                    <?php
                    the_content( sprintf(
                        wp_kses(
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blog' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="img-post">
                    <?php blog_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </div>
</article>
<!-- #post-<?php the_ID(); ?> -->
