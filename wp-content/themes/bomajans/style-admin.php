<?php $site_logo = get_field('site_logosu', 'option'); ?>

<style type="text/css">
#toplevel_page_cptui_main_menu, #dashboard-widgets-wrap, #wp-admin-bar-wp-logo, #footer-thankyou, #footer-upgrade, #wp-admin-bar-ilightbox_general, #wp-admin-bar-comments, #wp-admin-bar-new-content, #tagsdiv-sektor, #asp_metadata, #wp-admin-bar-wpseo-menu #se-top-global-notice, #wp-admin-bar-wpseo-menu, #tagsdiv-ilantipi, #ilankategoridiv, #ililcediv, #tagsdiv-oda, #tagsdiv-binayasi, #tagsdiv-binakatsayisi, #tagsdiv-bulundugukat, #tagsdiv-isitma, #tagsdiv-banyo, #tagsdiv-esya, #tagsdiv-kullanim, #tagsdiv-sitedurumu, #tagsdiv-kredi, #tagsdiv-kimden, #tagsdiv-takas,#tagsdiv-cephe,#tagsdiv-icozellik,#acentediv{
display: none;}
			
.wp-menu-separator, .update-nag {
   	display: none;	
}

body.wp-admin {
background-attachment: fixed;
background-image: url(<?php echo $site_logo['url']; ?>) !important;
background-position: right bottom;
background-repeat: no-repeat;
background-size: calc(100px) auto;
}
#welcome-panel, #screen-meta-links{
	display: none;
}


</style>