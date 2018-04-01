<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label title="Search HeroesHype">
		<input type="search" class="search-field" id="header-search-field" placeholder="Search HeroesHype" value="<?php echo get_search_query(); ?>" name="s" />
		<i class="fa fa-search search-icon"></i>
	</label>
</form>
