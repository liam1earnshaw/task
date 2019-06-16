<?php /* Template Name: Home */ ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main">

    <section id="introduction" class="firstSection">

        <section id="introduction">

            <div class="container">

                <div class="col col12-12" data-aos="fade-left">

                    <?= the_field('introduction') ?>

                </div>

            </div>

        </section>

    </section>

    <section id="photosSection" class="secondSection">

        <?php
        $args = array(
            'post_type' => 'secondary_slider', // Custom post type
            'posts_per_page' => '-1', // Amount of rows
            'order' => 'ASC',
        );
        $new_query = new WP_Query ($args);
        if ($new_query->have_posts()) {
            while($new_query->have_posts()){
                $new_query->the_post();
                echo "<div class='gallerySlide'>";
                echo " <div id='profilePhoto' data-aos='flip-left' ";
                echo "style='background-image: url(\"";
                echo the_post_thumbnail_url();
                echo "\")'>";
                echo "<div class='overlay'>";
                echo "<h3>";
                the_title();
                echo "</h3>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        }
        wp_reset_postdata();
        ?>

    </section>

    <section id="education" class="thirdSection">

            <div class="container">

                <div class="col col12-12" data-aos="fade-left">

                    <?= the_field('education') ?>

                </div>

            </div>

    </section>

    <section id="expertise" class="fourthSection" style="background-image: url('/wp-content/themes/dev-task/img/projector.png')">

        <div class="container lightsContainer">
            <div class="turnOffLights">
                <p><i class="fas fa-lightbulb"></i></p>
            </div>
        </div>

            <div class="overlay active">

                <div class="marginCont">

                    <div class="expertiseBox">

                        <div class="container">

                        <?= the_field('expertise') ?>

                        </div>

                    </div>

                </div>

            </div>

        <div class="particles">
            <!-- particles.js container -->
            <div id="particles-js"></div>
        </div>

    </section>

    <section id="experience" class="fifthSection">

        <div class="container">

            <div class="col col12-12" data-aos="fade-left">

                <?= the_field('experience') ?>

            </div>

        </div>

    </section>

    <section id="hobbies-interests" class="sixthSection">

        <div class="absoluteImg" id="bgCont" style="background-image: url('/wp-content/themes/dev-task/img/tennisBg.png')"></div>

        <div class="container">

            <div class="bounce">
                <div class="balle"></div>
                <div class="ombre"></div>
            </div>

            <!--                <div class="col col4-12">-->
            <!---->
            <!--                    <div id="profilePhoto" data-aos="flip-left">-->
            <!---->
            <!--                    </div>-->
            <!---->
            <!--                </div>-->

            <div class="col col12-12" data-aos="fade-left">

                <?= the_field('hobbies_&_interests') ?>

            </div>

        </div>

    </section>

</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>