<?php
	/*
	Theme Name: Twenty Seventeen Child Theme
	Theme URI:
	Description: A child theme of Twenty Seventeen
	Author: dbmcmurdo
	Author URI: dequalsmcsquared
	Template: twentyseventeen
	Version: 0.1.0
	*/
?>
<?php
	// To see and report all possible problems
	ini_set ("display_errors", 1);
	error_reporting (E_ALL & ~E_NOTICE| E_STRICT);

	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles'
	);
	function theme_enqueue_styles() {
	  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	  wp_enqueue_style( 'child-style',  get_stylesheet_directory_uri() . '/style.css',
		array('parent-style')
	  );
	}
?>
<?php
	/* adds a dynamic copyright to site */
	function comicpress_copyright() {
	  global $wpdb;
		$copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		  $wpdb->posts
		WHERE
		  post_status = 'publish'"
		);

	  $output = '';
	  if ( $copyright_dates ) {
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
		  if( $copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate ) {
		  $copyright .= '-' . $copyright_dates[0]->lastdate;
		  }

		$output = $copyright;
		}
	  return $output;
	}
?>
