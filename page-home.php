<?php
// Template Name: Home
?>
<?php get_header(); ?>
<section class="container-fluid banner-hero g-0">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-hero/banner-hero.jpg" class="d-block w-100" alt="Banner hero">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-hero/banner-hero.jpg" class="d-block w-100" alt="Banner hero">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-hero/banner-hero.jpg" class="d-block w-100" alt="Banner hero">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </section>
      <section class="intro container text-center">
        <h3 class="title-section">we're here to help</h3>
        <p class="text-section">When it comes to caring for our most intimate areas, we’ve lost our connection. <br>Embarrassed, unwilling, or unable to communicate with others, we’re needlessly neglecting the parts of our bodies that need it most. <br>We’re here to help. Providing you with the expertise, knowledge and products you need to feel confident in your personal care.</p>
      </section>
      <section class="container-fluid g-0 text-center icons">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons.jpg" class="img-fluid">
      </section>
      <section class="py-5 intro2 container text-center">
        <h3 class="title-section">whatever your age. whatever your lifestyle. whatever your interests.</h3>
        <p class="text-section">Co-created with gynaecologists, our revolutionary products have been expertly developed to support your intimate microbiome and pH balance, and strengthen overall natural health. As the experts in intimate hygiene, we want to bring discussion about intimate wellness care out of the dark and demystify the taboos that surround it.</p>
      </section>

     <!--  <section id="splide" class="py-5 container splide" aria-label="Splide Basic HTML Example">
        <h3 class="title-section text-center">our products</h3>
        <div class="splide__track">
              <ul class="splide__list">
                    <div class="card text-center" style="width: 18rem;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards/img1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">intibiome wellness daily intimate wash</p>
                    </div>
                    <div class="card-category blue-bg">
                        <p>wellness</p>
                    </div>
                  </div>
                </li>
                  <li class="splide__slide">
                    <div class="card text-center" style="width: 18rem;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards/img2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">intibiome wellness daily intimate wash</p>
                    </div>
                    <div class="card-category green-bg">
                        <p>active</p>
                    </div>
                  </div></li>
                  <li class="splide__slide">
                    <div class="card text-center" style="width: 18rem;">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards/img3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">intibiome wellness daily intimate wash</p>
                    </div>
                    <div class="card-category pink-bg">
                        <p>agecare</p>
                    </div>
                  </div></li>
              </ul>
        </div>
      </section> -->
      <section id="splide" class="py-5 container splide" aria-label="Splide Basic HTML Example">
    <h3 class="title-section text-center mb-5">our products</h3>
    <div class="splide__track">
        <ul class="splide__list">
            <?php
            // Início do loop do WordPress
            $args = array('post_type' => 'produto'); // Substitua 'produto' pelo tipo de postagem desejado
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <li class="splide__slide">
                        <div class="card text-center" style="width: 18rem;">
                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '...']); ?>
                            <div class="card-body">
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-category <?php
                                $categories = get_the_terms(get_the_ID(), 'categorias');
                                if ($categories && !is_wp_error($categories)) {
                                    /*Essa parte do código é responsável por adicionar uma classe específica à <div class="card-category"> com base na categoria do produto. */
                                    foreach ($categories as $category) {
                                        if ($category->slug == 'wellness') {
                                            echo 'blue-bg';
                                        } elseif ($category->slug == 'active') {
                                            echo 'green-bg';
                                        } elseif ($category->slug == 'agecare') {
                                            echo 'pink-bg';
                                        }
                                    }
                                }
                                ?>">
                                <?php
                                // Recupera as categorias do produto
                                if ($categories && !is_wp_error($categories)) {
                                    foreach ($categories as $category) {
                                        echo '<p>' . esc_html($category->name) . '</p>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </li>
                    <?php
                }
            } else {
                // Caso não haja postagens para exibir
                echo 'No products found.';
            }
            wp_reset_postdata(); // Restaura os dados originais do post global
            ?>
        </ul>
    </div>
</section>


      <section class="py-5 container-fluid g-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/section_img.jpg" class="img-fluid">
      </section>

      <section id="blog" class="py-5 container splide" aria-label="Splide Basic HTML Example">
        <h3 class="title-section text-center mb-5">keep up to date with our discoveries</h3>
        <div class="splide__track">
              <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="card" style="width: 18rem;">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards-blog/img1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                </li>
                  <li class="splide__slide">
                    <div class="card" style="width: 18rem;">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards-blog/img1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="card" style="width: 18rem;">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cards-blog/img1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                  </li>
              </ul>
        </div>
      </section>
      <?php get_footer(); ?>