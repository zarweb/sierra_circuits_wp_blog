<?php

get_header();
?>

<section class="page-section">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile;
                ?>

            </main>
        </div>
    </div>
</section>
<?php
get_footer();

