<?php get_header(); ?>
            <main>
                <section class="about-us-strip">
                    <div class="about-us-strip__header-area">
                        <span class="about-us-strip__header-area__tagline">For attention seekers</span>
                        <h2 class="about-us-strip__header-area__summary">Keeper is a Bristol-based creative studio, working online and in print. We design web solutions, make images, and tell your brand’s story.</h2>
                    </div>
                    <div class="wrapper">
                        <div class="about-us-strip__text-area">
                            <p>We're here to make you look good.</p> 
                            <p>Plenty of places sell websites, design, and copy. But very few agencies offer a compelling vision, or tie their services together with pragmatic strategies. And even fewer feel personally invested in their clients’ success.</p>
                            <p>So we started Keeper in mid-2018. It goes like this: de-mystify the problem, come up with a plan, and execute it.</p>
                            <p>That's what we do.</p>
                            <p>If you're a small company who's good at what you do, but you need help presenting your work to the world – or if you're a medium-sized organisation wanting to upgrade your relationship with customers and clients – we’d love to hear from you.</p>
                        </div>
                        <div class="about-us-strip__skills-area">
                            <p>Communications strategy</p>
                            <p>Branding and brand guidelines</p>
                            <p>Photography and illustration</p>
                            <p>Print design (brochures, leaflets, ads)</p>
                            <p>Copy writing, editing and tone-of-voice development</p>
                            <p>Technical solutions</p>
                            <p>Web design and development</p>
                            <p>Workflow consultation</p>
                        </div>
                    </div>
                    <div id="skills-button" class="about-us-strip__skills-button">
                        <button>What else?</button>
                    </div>
                    <!-- <div class="about-us-strip__capabilities">
                        <p>Communications strategy | Branding and brand guidelines | Photography and illustration | Print design (brochures, leaflets) | Copy writing, editing and tone-of-voice development | Web development and design</p>
                    </div> -->
                    <div class="about-us-strip__contact-area" id="contact-form">
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