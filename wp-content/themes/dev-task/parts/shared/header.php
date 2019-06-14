<header>
    <section id="sliderContainer">
        <div class="imageSlider">

            <nav class="topNav">
                <div class="col col25-12">
                    <div class="tcenter">
                        <a class="hvr-fade" href="#introduction">Introduction</a>
                    </div>
                </div>
                <div class="col col25-12">
                    <div class="tcenter">
                        <a class="hvr-fade" href="#education">Education</a>
                    </div>
                </div>
                <div class="col col25-12">
                    <div class="tcenter">
                        <a class="hvr-fade" href="#first">Expertise</a>
                    </div>
                </div>
                <div class="col col25-12">
                    <div class="tcenter">
                        <a class="hvr-fade" href="#first">Experience</a>
                    </div>
                </div>
                <div class="col col25-12">
                    <div class="tcenter">
                        <a class="hvr-fade" href="#first">Attainments</a>
                    </div>
                </div>
            </nav>

            <?php
            $args = array(
                'post_type' => 'image_slider', // Your custom post type
                'posts_per_page' => '8', // Change the number to whatever you wish
                'order_by' => 'date', // Some optional sorting
                'order' => 'ASC',
            );
            $new_query = new WP_Query ($args);
            if ($new_query->have_posts()) {
                while($new_query->have_posts()){
                    $new_query->the_post();
                    echo "<div class='slide'>";
                    echo "<div class='bgImg'";
                    echo "style='background-image: url(\"";
                    echo the_post_thumbnail_url();
                    echo "\")'></div>";
                    echo "<div class='overlay'></div>
                      <div class='container fadeInBlock'>";
                    echo "<div class='text'>";
                    echo "<h1>";
                    the_title();
                    echo "</h1>";
                    the_content();
                    echo "<div class='fleft block arrow'><a href='#introduction'><i class=\"fas fa-chevron-down\"></i></a></div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    // Get a list of post's categories
//              $categories = get_the_category($post->ID);
//              foreach ($categories as $category) {
//                  echo $category->name;
//              }
                }
            }
            wp_reset_postdata();
            ?>

        </div>
    </section>
</header>
