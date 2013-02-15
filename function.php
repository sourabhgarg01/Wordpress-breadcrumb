<?php
/*
I wrote a quite clean breadcrumb function, 
you just need to copy/paste it in the functions.php file from your WordPress theme. 
If this file doesn’t exists, just create one and paste the function on it.
*/


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
