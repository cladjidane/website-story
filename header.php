<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Website_Story
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'website-story' ); ?></a>

    <div class="top-header">
        <a href="/"><img src="http://cbzh-website-story/wp-content/themes/website-story/img/logo-site.png" alt="Site Internet des 30ans du web by Code BZH 2019 !"></a>
        <nav>
            <ul>
            <li>LIEN 1</li>
            <li>LIEN 2</li>
            <li>LIEN 3</li>
            </ul>
        </nav>
    </div>


	