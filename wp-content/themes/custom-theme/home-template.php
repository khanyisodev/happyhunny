<?php
/*
Template Name: Home Page Template
Template Post Type: page
*/

get_header();


?>

<section class="section-title container home-header text-center">
  <h1>
    Premium, pre-owned kids brands<br/>
    <strong>for the best of value.</strong>
  </h1>
</section>
<section class="section-home-intro">
  <div class="container-flex-main container">
    <div class="row">
      <div class="col-sm-12 col-sm-8 col-md-8 col1 m_hide">
        <img class="col1 rounded box-shadow" src="<?php echo get_stylesheet_directory_uri(); ?>/img/categories-big-img@2x.webp"/>
      </div>
      <div class="col-sm-7 sm-width col-sm-4 col-md-4 col2 box-shadow rounded  text-center">
        <div>
          <h4 class="head-to">Head-to-toe</h4>
          <span class="head-sub">Explore our categories</span>
          <div class="tabs">
            <input type="radio" name="tabs" id="tabone" checked="checked">
            <label for="tabone">Both</label>
            <div class="tab">
              <div class="head-to-toe">
                <a href="#">Shop Everything</a>
                <a href="#">Accessories</a>
                <a href="#">Jackets &amp; Knitwear</a>
                <a href="#">Dresses &amp; Skirts</a>
                <a href="#">Tops</a>
                <a href="#">Bottoms</a>
                <a href="#">Sleepwear</a>
                <a href="#">Footwear</a>
              </div>
            </div>
            <input type="radio" name="tabs" id="tabtwo">
            <label for="tabtwo">Boys</label>
            <div class="tab">
              <div class="head-to-toe">
                <a href="#">Shop Everything</a>
                <a href="#">Accessories</a>
                <a href="#">Jackets &amp; Knitwear</a>
                <a href="#">Dresses &amp; Skirts</a>
                <a href="#">Tops</a>
                <a href="#">Bottoms</a>
                <a href="#">Sleepwear</a>
                <a href="#">Footwear</a>
              </div>
            </div>
            <input type="radio" name="tabs" id="tabthree">
            <label for="tabthree">Girls</label>
            <div class="tab">
              <div class="head-to-toe">
                <a href="#">Shop Everything</a>
                <a href="#">Accessories</a>
                <a href="#">Jackets &amp; Knitwear</a>
                <a href="#">Dresses &amp; Skirts</a>
                <a href="#">Tops</a>
                <a href="#">Bottoms</a>
                <a href="#">Sleepwear</a>
                <a href="#">Footwear</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Products -->
<section class="section-home-products">
   <div class="container">
      <h3>Recently Added</h3>
      <div class="flex">
        <div class="woocommerce columns-4 ">
          <ul class="products columns-4">
              <?php
              // Start the custom product loop
              $args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 4, // Limit the number of products to 4
              );
          
              $products = new WP_Query( $args );
          
              if ( $products->have_posts() ) :
                  while ( $products->have_posts() ) :
                      $products->the_post();
                      global $product;
                      ?>
          
                      <li class="product type-product post-<?php the_ID(); ?> status-<?php echo esc_attr( get_post_status() ); ?> <?php echo implode( ' ', wc_get_product_class() ); ?>">
                          <a href="<?php the_permalink(); ?>" class="product-link"> <!-- Add the link wrapper here -->
                              <div class="rounded box-shadow ld-sp">
                                  <figure class="ld-sp-img loaded">
                                      <?php echo woocommerce_get_product_thumbnail(); // Displays the product thumbnail ?>
                                  </figure>
                                  <div class="ld-sp-info">
                                      <h3><?php the_title(); ?></h3>
                                      <span class="size-attribute">
                                          <?php
                                          // Check if the product has a size attribute and display it without the label "Size:"
                                          $size_attribute = $product->get_attribute('size');
                                          if ($size_attribute) {
                                              echo $size_attribute;
                                          }
                                          ?>
                                      </span>
                                      <span class="price"><?php echo wc_price( $product->get_price() ) . ' ' . get_woocommerce_currency(); ?></span>
                                  </div><!-- /.ld-sp-info -->
                              </div><!-- /.ld-sp -->
                          </a> <!-- Close the link wrapper here -->
                      </li>
                      <?php
                  endwhile;
                  wp_reset_postdata();
              else:
                  // If no products found, display a message or fallback content.
                  echo 'No products found.';
              endif;
              ?>
          </ul>
        </div>
      </div>
   </div>
</section>
<section class="section-about">
  <div class="container rounded box-shadow">
    <div class="row">
      <div class="col-sm-12 col-sm-5 col-md-6">
        <h2>
          <strong>Quality </strong>controlled<strong> pre-loved</strong>, <strong>branded</strong> kids’ clothing
        </h2>
        <p>We know you want to do good- we also know that you want your kid’s clothes to feel good for them. That’s why we prioritise thorough quality control checks on the items sold through our platform.</p>
        <a href="" class="box-button">About Us</a>
      </div>
      <div class="col-sm-12 col-sm-5 col-md-6">
        <!-- about us bg -->
      </div>
    </div>
  </div>
</section>
<section class="multicolumn">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-sm-4 col-md-4 text-center">
        <div class="media media--adapt">
          <img class="multicolumn-card__image" srcset="//happyhunny.co.za/cdn/shop/files/icon-1-selling_3b293051-4589-426e-b6a9-a685cd3bd606.webp?v=1654507131 99w" src="//happyhunny.co.za/cdn/shop/files/icon-1-selling_3b293051-4589-426e-b6a9-a685cd3bd606.webp?v=1654507131&amp;width=550" sizes="(min-width: 990px) 550px, (min-width: 750px) 550px, calc(100vw - 30px)" alt="" height="123" width="99" loading="lazy">
        </div>
        <div class="multicolumn-card__info">
          <h3>Selling, simplified</h3>
          <div class="rte">
            <p>We’ve taken the hassle out of selling your stuff, with a super simple process.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-sm-4 col-md-4 text-center">
        <div class="media media--adapt">
          <img class="multicolumn-card__image" srcset="//happyhunny.co.za/cdn/shop/files/icon-2-environmentally.webp?v=1654507151 110w" src="//happyhunny.co.za/cdn/shop/files/icon-2-environmentally.webp?v=1654507151&amp;width=550" sizes="(min-width: 990px) 550px, (min-width: 750px) 550px, calc(100vw - 30px)" alt="" height="123" width="99" loading="lazy">
        </div>
        <div class="multicolumn-card__info">
          <h3>Environmentally friendly</h3>
          <div class="rte">
            <p>Buying and selling with us means you’re contributing to a kinder &amp; less saturated fashion industry.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-sm-4 col-md-4 text-center">
        <div class="media media--adapt">
          <img class="multicolumn-card__image" srcset="//happyhunny.co.za/cdn/shop/files/icon-3-happiness.webp?v=1654507186 124w" src="//happyhunny.co.za/cdn/shop/files/icon-3-happiness.webp?v=1654507186&amp;width=550" sizes="(min-width: 990px) 550px, (min-width: 750px) 550px, calc(100vw - 30px)" alt="" height="123" width="99" loading="lazy">
        </div>
        <div class="multicolumn-card__info">
          <h3>Happiness for all!</h3>
          <div class="rte">
            <p>Premium clothing, gently handled with love for bouncing little bees.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Products -->
<section class="section-home-products featured-products">
   <div class="container">
      <h3>Featured Products</h3>
      <div class="flex">
        <div class="woocommerce columns-4">
          <ul class="products columns-4">
              <?php
              // Start the custom product loop
              $args = array(
                  'post_type'      => 'product',
                  'posts_per_page' => 4, // Limit the number of featured products to 4
                  // 'meta_key'       => '_featured', // Filter by featured products
                  // 'meta_value'     => 'yes',
              );
          
              $products = new WP_Query( $args );
          
              if ( $products->have_posts() ) :
                  while ( $products->have_posts() ) :
                      $products->the_post();
                      global $product;
                      ?>
          
                      <li class="product type-product post-<?php the_ID(); ?> status-<?php echo esc_attr( get_post_status() ); ?> <?php echo implode( ' ', wc_get_product_class() ); ?>">
                          <a href="<?php the_permalink(); ?>" class="product-link"> <!-- Add the link wrapper here -->
                              <div class="rounded box-shadow ld-sp">
                                  <figure class="ld-sp-img loaded">
                                      <?php echo woocommerce_get_product_thumbnail(); // Displays the product thumbnail ?>
                                  </figure>
                                  <div class="ld-sp-info">
                                      <h3><?php the_title(); ?></h3>
                                      <span class="size-attribute">
                                          <?php
                                          // Check if the product has a size attribute and display it without the label "Size:"
                                          $size_attribute = $product->get_attribute('size');
                                          if ($size_attribute) {
                                              echo $size_attribute;
                                          }
                                          ?>
                                      </span>
                                      <span class="price"><?php echo wc_price( $product->get_price() ) . ' ' . get_woocommerce_currency(); ?></span>
                                  </div><!-- /.ld-sp-info -->
                              </div><!-- /.ld-sp -->
                          </a> <!-- Close the link wrapper here -->
                      </li>
                      <?php
                  endwhile;
                  wp_reset_postdata();
              else:
                  // If no products found, display a message or fallback content.
                  echo 'No featured products found.';
              endif;
              ?>
          </ul>
        </div>
      </div>
   </div>
</section>
<!--  -->
<section class="section-promise">
   <div class="container text-center">
     <div class="box">
       <p>Our Promise</p>
       <h2>Premium, pre-owned kids<br/> brands for the 
           <strong>best value.</strong>
       </h2>
     </div>
   </div>
</section>
<!-- Departments -->
<section class="section-departments">
  <div class="container">
  
    <div class="col-12 col-sm-12 col-sm-8 col-md-8 col1">
      <a href="/collections/winter-warmers" class="box"><h3>Winter Warmers</h3></a>
    </div>
    <div class="col-6 col-sm-6 col-sm-4 col-md-4 col2">
      <a href="/collections/bottoms?filter.p.m.custom.gender=Boys&amp;filter.v.price.gte=&amp;filter.v.price.lte=&amp;sort_by=manual" class="box"><h3>Boys Pants &amp; Jeans</h3></a>
    </div>
    <div class="col-6 col-sm-6 col-sm-4 col-md-4 col3">
      <a href="/collections/tops?filter.p.m.custom.gender=Girls&amp;filter.v.price.gte=&amp;filter.v.price.lte=&amp;sort_by=manual" class="box"><h3>Girls Tops</h3></a>
    </div>
    <div class="col-6 col-sm-6 col-sm-4 col-md-4 col4">
      <a href="/collections/accessories" class="box"><h3>Accessories</h3></a>
    </div>
    <div class="col-6 col-sm-6 col-sm-4 col-md-4 col5">
      <a href="/collections/spring-specials" class="box"><h3>Spring Time Specials</h3></a>
    </div>
  </div>
</section>
<!-- Testimonials -->
<section class="section-testimonials">
  <div class="container">
    <div class="testimonial-holder">
      <div class="qholder">
        <div class="qcontent">
          <p>“As parents, we love seeing our little hunnies with style, even if it costs us more than it seems worthwhile…but the result – they wear it once, and much prefer to kick back in what they consider “comfy”. After chatting to a few parents, we realised we were not the only ones who had a sick pair of kickers that was worn a few times before the kids had outgrown them, or “simply didn’t feel like it anymore”.</p>
          <p><br>While sitting on the patio and sipping coffee, we decided it was time to get our hands sticky in an attempt to find a solution – we were done spending a fortune on clothes that were outgrown a few months in, or weren’t worn (tags still on!). We contemplated a solution that would benefit us, our friends and our family. This simple patio chat grew into a buzz that could be heard and Happy Hunny was born.</p>
          <p><br>Our meaning for creating the platform stems from wanting to provide a sustainable future for our kids, concentrating our efforts further on reducing the carbon footprint of the fashion industry as a whole, while creating a pocket-saving alternative for parents. Bee-a part of our hive today!”</p>
        </div>
      </div>
      <span>Ryan &amp; Kirtanya, co-founders</span>
      <div class="quote">
        <img src="//happyhunny.co.za/cdn/shop/t/2/assets/bubble-top.webp?v=105035036357224236441665480984" alt="">
        <div>&nbsp;</div>
        <img src="//happyhunny.co.za/cdn/shop/t/2/assets/bubble-bottom.webp?v=119983399329562091131665480983" alt="">
      </div>
    </div>
  </div>
</section>
<!-- How -->
<section class="section-how">
  <div class="container">
    <div class="box">
      <div class="row">
        <div class="col-sm-12 col-md-7 col1">
          <h2>Tiny tots getting too big for their boots?<img src="//happyhunny.co.za/cdn/shop/t/2/assets/img-bee-tots.webp?v=147272671413657097681655984993" alt=""></h2>
          <p>Don’t let your kid’s clothing end up in a landfill.<br>
            Learn how to sell with us - the easy way.</p>
        </div>
        <div class="col-sm-12 col-md-6 text-center col2"><p><strong>Get clued and get selling.</strong></p>
          <a href="/pages/sell-with-us" class="box-button">How it works</a>
        </div>
      </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>