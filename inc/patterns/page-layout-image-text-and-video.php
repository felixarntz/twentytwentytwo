<?php
/**
 * Page layout with image, text and video.
 */
return array(
	'title'      => __( 'Page layout with image, text and video', 'twentytwentytwo' ),
	'categories' => array( 'twentytwentytwo-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"0px","right":"0px"}}},"backgroundColor":"primary","textColor":"background"} -->
					<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:8rem;padding-bottom:8rem;padding-left:0px;padding-right:0px"><!-- wp:group {"align":"full","layout":{"inherit":true},"style":{"spacing":{"padding":{"left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}}} -->
					<div class="wp-block-group alignfull" style="padding-left:max(1.25rem, 5vw);padding-right:max(1.25rem, 5vw)"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 4.5rem)"}}} -->
					<h1 class="alignwide" style="font-size:clamp(3rem, 6vw, 4.5rem)">' . wp_kses_post( __( '<em>Warble</em>, a film about <br>hobbyist bird watchers.', 'twentytwentytwo' ) ) . '</h1>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"large"} -->
					<h2 class="has-large-font-size">' . esc_html__( 'Screening', 'twentytwentytwo' ) . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>' . wp_kses_post( __( 'May 14th, 2022 @ 7:00PM<br>The Vintagé Theater,<br>245 Arden Rd.<br>Gardenville, NH', 'twentytwentytwo' ) ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"primary"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-secondary-background-color has-text-color has-background">' . esc_html__( 'Buy Tickets', 'twentytwentytwo' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"width":"66.66%"} -->
					<div class="wp-block-column" style="flex-basis:66.66%"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->

					<!-- wp:image {"align":"full","style":{"color":{}}} -->
					<figure class="wp-block-image alignfull"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-transparent-a.webp" alt="' . esc_attr__( 'An illustration of a bird in flight', 'twentytwentytwo' ) . '"/></figure>
					<!-- /wp:image -->
					
					<!-- wp:group {"align":"full","layout":{"inherit":true},"style":{"spacing":{"padding":{"left":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)"}}}} -->
					<div class="wp-block-group alignfull" style="padding-left:max(1.25rem, 5vw);padding-right:max(1.25rem, 5vw)"><!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"large"} -->
					<h2 class="has-large-font-size">' . esc_html__( 'Extended Trailer', 'twentytwentytwo' ) . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Oh hello. My name’s Angelo, and you’ve found your way to my blog. I write about a range of topics, but lately I’ve been sharing my hopes for next year.', 'twentytwentytwo' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"width":"66.66%"} -->
					<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:video {"id":181} -->
					<figure class="wp-block-video"><video controls src="' . esc_url( get_template_directory_uri() ) . '/assets/videos/birds.mp4"></video></figure>
					<!-- /wp:video --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
