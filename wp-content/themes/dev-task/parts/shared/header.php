<header>
    <section id="sliderContainer">
        <div class="imageSlider">

            <div class="mob_show" id="mobile_menu">
                <div class="menu-wrap">
                    <ul>
                        <li><a class="hvr-fade" href="#introduction">Introduction</a></li>
                        <li><a class="hvr-fade" href="#education">Education</a></li>
                        <li><a class="hvr-fade" href="#expertise">Expertise</a></li>
                        <li><a class="hvr-fade" href="#experience">Experience</a></li>
                        <li><a class="hvr-fade" href="#hobbies-interests">Hobbies & Interests</a></li>
                    </ul>
                </div>
            </div>


            <div class="mob_show mobile_toggle">
                <div class="toggle-button">
                    <div class="menu-bar menu-bar-top"></div>
                    <div class="menu-bar menu-bar-middle"></div>
                    <div class="menu-bar menu-bar-bottom"></div>
                </div>
            </div>

            <nav class="topNav mob_hide">
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
                        <a class="hvr-fade" href="#expertise">Expertise</a>
                    </div>
                </div>
                <div class="col col25-12">
                    <div class="tcenter">
                        <a class="hvr-fade" href="#experience">Experience</a>
                    </div>
                </div>
                <div class="col col25-12">
                    <div class="tcenter">
                        <a class="hvr-fade" href="#hobbies-interests">Hobbies & Interests</a>
                    </div>
                </div>
            </nav>

            <?php
            $args = array(
                'post_type' => 'image_slider', // Custom post type
                'posts_per_page' => '8', // Amount of rows
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
