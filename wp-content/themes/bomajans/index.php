<?php
/**
 * Main file
 *
 * @link https://www.bomajans.com/
 *
 * @package WordPress
 * @subpackage Behlul Aksu
 * @since 1.0
 * @version 1.0
 */
if (function_exists('get_header')) {
    get_header();
}else{
    header("Location: https://www.bomajans.com/");	
    exit;
}; ?>


<?php 
	

	if ( is_home() && is_front_page() ) {
		require("tr/index.php");
	}else if(is_page('anasayfa')){ 
		require("tr/index.php"); 
	}else if(is_page('category')){ 
        require("tr/category.php"); 
    }else if(is_page('single-blog')){ 
        require("tr/single-blog.php"); 
    }




 ?>


 <?php get_footer();