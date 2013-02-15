<?php
function the_breadcrumb() {
  if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		echo "Home";
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " » ";
				the_title();
			}
		} if (is_page()) {
			echo the_title();
		}
	}
}
?>
