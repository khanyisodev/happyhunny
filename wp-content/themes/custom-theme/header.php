<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

// Retrieve the logo from the theme settings
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" rel="stylesheet">
  <title> <?php wp_title("|", true, "right"); ?> </title>
</head>
<body <?php body_class(); ?>>
  <div id="wrap">
    <header>
      <a class="skip-link screen-reader-text" href="#content"> 
        <?php esc_html_e(
          "Skip to content",
          "ct-custom"
        ); ?>
      </a>
      <div class="announcement-bar" role="region" aria-label="Announcement">
        <a href="#" class="announcement-bar__link link link--text"><p class="announcement-bar__message">Get 20% off as a welcome gift - use coupon 'FIRSTBUY'
          <svg class="icon icon-arrow" width="17px" height="11px" viewBox="0 0 17 11" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Category" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
              <g id="Happy-Hunny-Category-Filter-1-Mobile" transform="translate(-319.000000, -113.000000)" stroke="#FFFFFF" stroke-width="2">
                <g id="Filter-Menu-|-Level-1" transform="translate(50.000000, 0.000000)">
                  <g id="Item" transform="translate(25.000000, 108.000000)">
                    <g id="long-arrow-right" transform="translate(245.000000, 6.000000)">
                      <line x1="4.7582099e-17" y1="4.363961" x2="13.7146063" y2="4.363961" id="Line"></line>
                      <polyline id="Path" transform="translate(10.628820, 4.363961) rotate(-315.000000) translate(-10.628820, -4.363961) " points="7.54303346 1.27817458 13.7146063 1.27817458 13.7146063 7.44974742"></polyline>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </p>
      </a>
    </div>
    <div class="section-send-stock">
      <div class="sub-banner">
        <div class="send-stock-img">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-stock.png" />
        </div>
        <div class="send-stock-message ">
          <strong class="sell-message">Sell your clothes. Keep your cupboard space.</strong>
          <br /> We’re stocking up on pre-loved items, if you have any, sell them to us.
        </div>
        <div class="box-button-wrapper">
          <a class="box-button" href="">More</a>
        </div>
      </div>
    </div>
    <div class="search-wrapper">
      <div class="search-wrapper text-center">
        <div class="search-container">
          <div>
              <form role="search" method="get" class="woocommerce-product-search" action="/">
              	<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
              	<input type="search" id="woocommerce-product-search-field-0" class="search-field box-shadow rounded" placeholder="Search products…" value="" name="s">
              	<button type="submit" value="Search" fdprocessedid="eh83ui" class="submit-btn"><i class="fa fa-search" style="font-size:23px" aria-hidden="true"></i></button>
              	<input type="hidden" name="post_type" value="product"><span class="close-search rounded">X</span>
              </form>
          </div>
      </div>
      <div class="search-overlay close-search"></div>
      <div class="mobile-wrapper">
        <div class="mobile-menu-container">
          <div id="overlay">
              <?php wp_nav_menu([
                "menu" => "menu-1",
                "menu_id" => "primary-menu",
              ]); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container header-wrapper">
    <div class="mainbar">
      <div class="row align-items-end">
        <div class="search desktop col">
          <i class="fa fa-search" style="font-size:23px" aria-hidden="true"></i>
        </div>
        <div class="mobile-wrapper col">
          <div class="nav">
            <div id="hamburger">
              <div></div>
            </div>
          </div>
        </div>
       <div class="logo text-center col">
         <a href="" class="header__heading-link">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/header-logo.svg" alt="logo">
         </a>
       </div>
       <div class="header-detail col">
         <div class="search header-icon mobile-wrapper">
           <i class="fa fa-search" style="font-size:23px" aria-hidden="true"></i>
         </div>
         <a href="#" class="header-icon user-icon desktop">
           <i class="fa fa-user-circle-o" aria-hidden="true"></i>
         </a>
         <a href="#" class="header-icon wishlist-icon">
           <i class="fa fa-heart-o" aria-hidden="true"></i>
         </a>
         <a href="" class="header-icon cart-icon">
           <i class="fa fa-shopping-basket" aria-hidden="true"></i>
         </a>
       </div>
     </div>
    </div>
  </div>
  <div class="tertiary-bar">
    <div class="container">
      <nav id="site-navigation" class="main-navigation desktop">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> 
          <?php esc_html_e(
            "Primary Menu",
            "ct-custom"
          ); ?>
        </button> 
        <?php wp_nav_menu([
          "menu" => "menu-1",
          "menu_id" => "primary-menu",
        ]); ?>
      </nav>
      <!-- #site-navigation -->
    </div>
  </div>
</header>
<main>