<!DOCTYPE html>
<html lang="tr-TR">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>BOM AJANS</title>
      <meta name="description" content="Bom Ajans - Aday Template">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" type="<?php echo get_template_directory_uri(); ?>/assets/image/x-icon" href="images/favico.jpg">
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&family=Grenze:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
      <!-- STYLES -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css" media="all">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" type="text/css" media="all">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" type="text/css" media="all">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/simple-line-icons.css" type="text/css" media="all">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" media="all">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- preloader -->
      <div id="preloader">
         <!-- <div class="book"> -->
         <div class="inner">
            <p class="loader_text">Bom Ajans</p>
         </div>
      </div>
      <!-- site wrapper -->
      <div class="site-wrapper">
         <div class="main-overlay"></div>
         <!-- header -->
         <header class="header-personal">
            <nav class="navbar navbar-expand-lg">
               <div class="container-xl">
                  <div class="collapse navbar-collapse justify-content-center centered-nav">
                     <!-- menus -->
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="<?php echo get_site_url(); ?>">Anasayfa</a>
                        </li>
                           <?php 
                           $categories = get_categories();
                           foreach($categories as $category) { 
                              $image = get_field('kategori_genel_resim','category_'.$category->term_id);

                              /* echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';*/
                              ?>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?php echo get_site_url(); ?>/category?c=<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
                              </li>

                           <?php }?>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>