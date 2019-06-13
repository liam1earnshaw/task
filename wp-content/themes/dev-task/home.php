<?php /* Template Name: Home */ ?>

<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="main">

    <section id="introduction" class="firstSection">

        <section id="introduction">

            <div class="container">

<!--                <div class="col col4-12">-->
<!---->
<!--                    <div id="profilePhoto" data-aos="flip-left">-->
<!---->
<!--                    </div>-->
<!---->
<!--                </div>-->

                <div class="col col12-12" data-aos="fade-left">

                    <?= the_field('introduction') ?>

                </div>

            </div>

        </section>

    </section>

    <section class="secondSection">

        <section id="introduction">


                <div class="col col4-12">

                    <div id="profilePhoto" data-aos="flip-left">

                        <div class="overlay">

                            <h3>professional</h3>

                        </div>

                    </div>

                </div>

                <div class="col col4-12">

                    <div id="profilePhoto" data-aos="flip-left" style="background-image: url('/wp-content/themes/dev-task/img/tennis.jpg')">

                        <div class="overlay">

                            <h3>competetive</h3>

                        </div>

                    </div>

                </div>

                <div class="col col4-12">

                    <div id="profilePhoto" data-aos="flip-left">

                        <div class="overlay">

                            <h3>educated</h3>

                        </div>

                    </div>

                </div>

        </section>

    </section>

    <section id="education" class="thirdSection">

        <section id="introduction">

            <div class="container">

                <!--                <div class="col col4-12">-->
                <!---->
                <!--                    <div id="profilePhoto" data-aos="flip-left">-->
                <!---->
                <!--                    </div>-->
                <!---->
                <!--                </div>-->

                <div class="col col12-12" data-aos="fade-left">

                    <?= the_field('education') ?>

                </div>

            </div>

        </section>

    </section>

</main>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>