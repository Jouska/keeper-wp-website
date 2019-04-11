<?php get_header(); ?>
            <main>
                <section class="about-us-strip">
                    <div class="about-us-strip__header-area">
                        <span class="about-us-strip__header-area__tagline">For attention seekers</span>
                        <h2 class="about-us-strip__header-area__summary">Keeper is a Bristol-based creative studio working in web and print.
                    Web design solutions, image making services and brand messaging for your story.</h2>
                    </div>
                    <div class="about-us-strip__text-area">
                        <p>We're here to make you look good. We started Keeper in mid-2018 because there were a lot of places you could go to buy design, websites and copy, but very few places that tied these things together with a compelling vision, or pragmatic strategies. 
                            <br>
                            Even fewer agencies felt personally invested in their clients success. 
                            <br>
                            It goes like this: de-mystify the problem, come up with a plan and execute it. 
                            <br>
                            That's what we do. 
                            <br>
                            So, if you're a small company who's good at what they do, but needs help  presenting their work to the world, or if you're a medium sized organisation that wants to upgrade their relationship with their customers and clients, we would love to hear from you.</p>
                    </div>
                    <div class="about-us-strip__contact-area">
                        <div class="about-us-strip__contact-area__text">
                            <h2>Contact</h2>
                        </div>
                        <div class="about-us-strip__contact-area__form">
                            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </section>
                <section class="blog-section">
                    <h2 class="blog-section__header">FROM THE BLOG</h2>
                    <div class="dynamic-strip archive-view">
                            <?php
                            $keeper_query = new WP_Query( array(
                                'posts_per_page'   => 3,
                                'post_type'    => 'post',
                                'category_name'=> 'front-page'
                            ));

                            if ($keeper_query->have_posts() ) {
                                while ( $keeper_query->have_posts() ) {
                                    $keeper_query->the_post();

                                    get_template_part( 'template-parts/content', get_post_type() );
                                }
                            }

                            ?>
                    </div>
                </section>
            </div>
        </main>
    <?php get_footer(); ?>