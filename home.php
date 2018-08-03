<?php

get_header(); ?>



<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section id="first">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="first-post-box">
                            <?php
                            if ( have_posts() ) :
                            if ( is_home() && ! is_front_page() ) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                                <?php
                                exit(the_post());
                            endif;
                            while ( have_posts() ) : the_post();
                            if( $wp_query->current_post == 0 && !is_paged() ):
                            get_template_part( 'template-parts/content-first-post', get_post_format() );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="post-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <?php
                        else:
                            get_template_part( 'template-parts/content-home', get_post_format() );
                        endif;
                        endwhile;
                        the_posts_navigation();
                        else :
                            get_template_part( 'template-parts/content', 'none' );
                        endif; ?>

                    </div>
                    <div class="col-md-3">
                        <div class="subscribe-box">
                            <div class="subscibe-head">
                                SUBCRIBE
                            </div>
                            <div class="subscibe-body">
                                <?php echo do_shortcode('[contact-form-7 id="51" title="Subscribe"]'); ?>
                            </div>
                        </div>
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
