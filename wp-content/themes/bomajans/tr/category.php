<?php include 'header.php';?>

<?php    if (isset($_GET['c'])){
            $category= strip_tags($_GET["c"]); 
            $args = array(
               'post_type' => 'makale',
               'category_name' => $category
            );
         }
         $catObj = get_category_by_slug($category);

?>
               <section class="page-header">
                  <div class="container-xl">
                     <div class="text-center">
                        <h1 class="mt-0 mb-2"><?php echo $catObj->cat_name; ?></h1>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb justify-content-center mb-0">
                              <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Anasayfa</a></li>
                              <li class="breadcrumb-item active" aria-current="page">/ <?php echo $catObj->cat_name; ?></li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </section>






         <!-- section main content -->
         <section class="main-content">
            <div class="container-xl">
               <div class="row gy-4">
                  <div class="col-lg-12">
                     <div class="row gy-4">
                        <div class="section-header">
                           <h3 class="section-title">Tüm Yazılar</h3>
                        </div>
                        <?php 
                           $my_posts = new WP_Query($args);
                           while ($my_posts->have_posts()) {
                                 $my_posts->the_post();
                                  /************************************/   
                                  $queryForPostTypeImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),$size = 'medium_large' );
                                 ?>  
                                 <div class="col-sm-6 col-md-4">
                                    <!-- post -->
                                    <div class="post post-grid rounded bordered">
                                       <div class="thumb top-rounded">
                                          <a href="<?php echo get_site_url(); ?>/single-blog?b=<?php echo $post->ID ?>">
                                             <div class="inner">
                                                <img src="<?php echo $queryForPostTypeImage[0]; ?>" alt="post-title" />
                                             </div>
                                          </a>
                                       </div>
                                       <div class="details">
                                          <ul class="meta list-inline mb-0">
                                             <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/category?c=<?php echo $catObj->slug; ?>"><?php echo $catObj->cat_name; ?></a></li>
                                             <li class="list-inline-item"><?php echo get_the_date(); ?></li>
                                          </ul>
                                          <h5 class="post-title mb-1 mt-2"><a href="<?php echo get_site_url(); ?>/single-blog?b=<?php echo $post->ID ?>"><?php echo get_the_title(); ?></a></h5>
                                          <p class="excerpt mb-0">
                                             <?php 
                                                $excerpt = get_the_content();
                                                $excerpt = mb_substr($excerpt, 0, 140); 
                                                echo $excerpt;
                                             ?>...

                                          </p>
                                       </div>
                                       <div class="post-bottom clearfix d-flex align-items-center">
                                          <div class="social-share me-auto">
                                             <button class="toggle-button icon-share"></button>
                                             <ul class="icons list-unstyled list-inline mb-0">
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                             </ul>
                                          </div>
                                          <div class="more-button float-end">
                                             <a href="#"><span class="icon-options"></span></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                              <?php
                              }
                           wp_reset_query();
                        ?>
                     </div>
                     <?php 
                     /*
                     <nav>
                        <ul class="pagination justify-content-center">
                           <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
                           <li class="page-item active" aria-current="page">
                              <span class="page-link">1</span>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                     </nav>
                     */
                      ?>
                  </div>
               </div>
            </div>
         </section>

<?php include 'footer.php';?>
