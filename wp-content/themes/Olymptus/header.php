<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Olymptus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<?php 
// Template Name: Home Page
?>
<?php 
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olymptus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    
    <link rel="stylesheet" href="/wp-content/Olymptus/style.css">
    <?php 
    wp_head();
    ?>
</head>
<body>
    <aside>
        <div class="bg-primary">
            <div class="container mx-auto">
                <div class="bg-primary color-primary d-flex p-sm  align-center">
                    <span class="iconify c-orange" data-icon="fluent:mail-unread-20-filled"></span>
                    <p class="mr-1 ml-sm">
                        <a class="c-white p-link" href="mailto:info@sparklewpthemes.com">info@sparklewpthemes.com</a>
                    </p>
                    <span class="iconify c-orange" data-icon="bi:telephone-fill"></span>
                    <p class="ml-sm">
                        <a class="c-white p-link" href="tel:9809758493">977-9809758493</a>
                    </p>
            
                    <div class="ml-auto">
                        <a href="">
                            <span class="iconify c-white mr-1" data-icon="grommet-icons:facebook-option"></span>
                        </a>
                        <a href="">
                            <span class="iconify c-white mr-1" data-icon="akar-icons:twitter-fill"></span>
                        </a>
                        <a href="">
                            <span class="iconify c-white mr-1" data-icon="akar-icons:instagram-fill"></span>
                        </a>
                        <a href="">
                            <span class="iconify c-white" data-icon="cib:pinterest-p"></span>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
    
        <!--
            aside section for the banner ends here
        -->
    
        <header>
            <div class="container mx-auto d-flex p-sm align-center">
                <!-- <img class="mr-1" src="img/logo.png" alt="logo of olymptus"> -->
				<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
							
							<?php endif; ?>
				</div>
				
                <nav class="flex-auto mr-1">
						<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
                            'menu-class' => 'f-mulish ls-none fw-600 d-flex justify-evenly',
							// 'menu_id'        => 'primary-menu',
						)
					);
					?>
<!-- 						
				<ul class="f-mulish ls-none fw-600 d-flex justify-evenly">
                        <li><a class="c-black p-link" href="">Home</a></li>
                        <li><a class="c-black p-link" href="">Pages <span class="down-arrow ml-sm d-inline-block">&#8250;</span></a></li>
                        <li><a class="c-black p-link" href="">Practices Area</a></li>
                        <li><a class="c-black p-link" href="">Attorney</a></li>
                        <li><a class="c-black p-link" href="">Contact</a></li>
                        <li><a class="c-black p-link" href="">Blog <span class="down-arrow ml-sm d-inline-block">&#8250;</span></a></li>
                    </ul> -->
                </nav>
    
                <div class="d-flex ps-relative">
                    <input class="br-3 p-xm pr-sm border-1 c-offblack" placeholder="search" type="search">
                    <span class="iconify ps-absolute c-offblack input-fs r-xm t-50 ty-center" data-icon="eva:search-fill"></span>
                </div>
    
            </div>
        </div>
    </header>
