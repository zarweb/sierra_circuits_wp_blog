<?php get_header(); ?>
    <section class="single-post">
        <div class="container text-center">
            <div class="col-md-1">aaa</div>
            <div class="col-md-8">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                                the_post_navigation();
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            endwhile;
                        ?>
                    </main>
                </div>
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
    </section>


<?php
get_footer();
