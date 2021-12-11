<?php include 'header.php';?>

<?php    if (isset($_GET['b'])){
            $yazi= strip_tags($_GET["b"]); 
            $args = array(
               'post_type' => 'makale',
               'p' => $yazi
            );
         }

?>


         <section class="hero-carousel">
            <div class="container-xl">
               <div class="row gy-4">
                  <div class="col-lg-8">



                        <?php 
                           $my_posts = new WP_Query($args);
                           while ($my_posts->have_posts()) {
                                 $my_posts->the_post();
                                  /************************************/   
                                    $category_detail = get_the_category($post->ID);//$post->ID
                                    foreach($category_detail as $cd){
                                    $catname = $cd->cat_name;
                                    $catslug = $cd->slug;
                                    }



                                  $queryForPostTypeImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),$size = 'medium_large' );
                                 ?> 

                                    <!-- post single -->
                                    <div class="post post-single">
                                       <!-- post header -->
                                       <div class="post-header">
                                          <h1 class="title mt-0 mb-3"><?php echo get_the_title(); ?></h1>
                                          <ul class="meta list-inline mb-0">
                                             <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/category?c=<?php echo $catslug; ?>"><?php echo $catname; ?></a></li>
                                             <li class="list-inline-item"><?php echo get_the_date(); ?></li>
                                          </ul>
                                       </div>
                                       <!-- featured image -->
                                       <div class="featured-image">
                                          <img src="<?php echo $queryForPostTypeImage[0]; ?>" alt="post-title" />
                                       </div>
                                       <!-- post content -->
                                       <div class="post-content clearfix">
                                          <?php echo get_the_content(); ?>
                                       </div>
                                       <!-- post bottom section -->
                                       <div class="post-bottom">
                                          <div class="row d-flex align-items-center">
                                             <div class="col-md-6 col-12 text-center text-md-start">
                                                <!-- tags -->
                                                <a href="<?php echo get_site_url(); ?>/category?c=<?php echo $catslug; ?>" class="tag">#<?php echo $catname; ?></a>
                                             </div>
                                             <div class="col-md-6 col-12">
                                                <!-- social icons -->
                                                <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                                                   <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                   <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                              <?php
                              }
                           wp_reset_query();
                        ?>


                     <div class="spacer" data-height="50"></div>
                     <div class="about-author padding-30 rounded">
                        <div class="thumb">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bomajans-square-2.jpg" alt="logo" style="max-width:100px;" />
                        </div>
                        <div class="details">
                           <h4 class="name"><a href="#">Bom Ajans</a></h4>
                           <p>Özgün ve kaliteli işler üreten, yeni nesil bir dijital ajans.</p>
                           <!-- social icons -->
                           <ul class="social-icons list-unstyled list-inline mb-0">
                              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="spacer" data-height="50"></div>
                     <!-- section header -->
                  </div>



                  <div class="col-lg-4">
                     <!-- sidebar -->
                     <div class="sidebar">
                        <!-- widget post carousel -->
                        <div class="widget rounded">
                           <div class="widget-header text-center">
                              <h3 class="widget-title">Kategorinin Diğer Postları</h3>
                           </div>
                           <div class="widget-content">
                              <div class="post-carousel-widget">
                                 <?php 
                                    $diger_postlar = array(
                                       'post_type' => 'makale',
                                       'category_name' => $catslug
                                    );

                                    $my_posts = new WP_Query($diger_postlar);
                                    while ($my_posts->have_posts()) {
                                          $my_posts->the_post();
                                           /************************************/   
                                           $queryForPostTypeImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),$size = 'medium_large' );
                                          ?>  
                                          <!-- post -->
                                          <div class="post post-carousel">
                                             <div class="thumb rounded">
                                                <a href="blog-single.html">
                                                   <div class="inner">
                                                      <img src="<?php echo $queryForPostTypeImage[0]; ?>" alt="<?php echo get_the_title(); ?>" />
                                                   </div>
                                                </a>
                                             </div>
                                             <h5 class="post-title mb-0 mt-4"><a href="blog-single.html"><?php echo get_the_title(); ?></a></h5>
                                             <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/category?c=<?php echo $catslug; ?>"><?php echo $catname; ?></a></li>
                                                <li class="list-inline-item"><?php echo get_the_date(); ?></li>
                                             </ul>
                                          </div>
                                       <?php
                                       }
                                    wp_reset_query();
                                 ?>
                              </div>
                              <!-- carousel arrows -->
                              <div class="slick-arrows-bot">
                                 <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                 <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
                              </div>
                           </div>
                        </div>








                        <!-- widget tags -->
                        <div class="widget rounded">
                           <div class="widget-header text-center">
                              <h3 class="widget-title">Diğer Kategoriler</h3>
                           </div>
                           <div class="widget-content">
                              <?php 
                              $categories = get_categories();
                              foreach($categories as $category) { 
                                 ?>
                                 <a href="category?c=<?php echo $category->slug; ?>" class="tag">#<?php echo $category->name; ?></a>
                              

                              <?php }?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>



<?php include 'footer.php';?>
