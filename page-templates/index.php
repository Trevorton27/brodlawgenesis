<?php get_header(); ?>

<div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                <?php
                // If there are any posts
                if( have_posts() ):
                    // While have posts, show them to us
                    while( have_posts() ): the_post();

                ?>
                <?php
                endwhile;
                ?>
                <p>There is nothing to be displayed.</p>
                <?php endif; ?>
				</div>
            </div>
            <div id="contact-widget" class="col-sm-3 align-self-center">
                <?php if ( is_active_sidebar( 'contact-sasha' ) ) : ?>
                    <?php dynamic_sidebar( 'contact-sasha' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div id="homepage-contact-button" class="col text-center">
        <a class="btn btn-primary rounded-0" href="http://localhost/brodsky_law/contact/" role="button">Contact Sasha</a>
        </div>

    <?php get_footer(); ?>
