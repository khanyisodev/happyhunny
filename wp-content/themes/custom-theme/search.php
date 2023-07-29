<?php
/**
 * Template Name: Custom Search Page for WooCommerce
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
			<section class="section-search">
				 <div class="container">
						<div class="row">
              <div class="titlebar text-center">
                <h1>Searched Product: <span id="searched-term"></span></h1>
              </div>
              <div class="product-wrapper">
                <div class="woocommerce columns-4">
  								<ul class="products columns-4">
                    <?php if ( have_posts() ) : ?>
                      <?php while ( have_posts() ) : the_post(); ?>
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
                      <?php endwhile; ?>
                    <?php else : ?>
                      <p><?php _e( 'No products found.', 'woocommerce' ); ?></p>
                    <?php endif; ?>
                  </ul>
  							</div>
              </div>
						</div>
				 </div>
			</section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
