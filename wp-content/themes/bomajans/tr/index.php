<?php include 'header.php';?>

      <?php 
         $sayfa_ilk_resim =  get_field('sayfa_ilk_resim','option'); 

       ?>
         <section class="hero-carousel">
            <div class="container-xl">
               <div class="post-carousel-lg">
                  <!-- post -->
                  <div class="post featured-post-xl">
                     <div class="details clearfix">
                        <h4 class="post-title"><a href="#"><?php echo get_field('giris_resim_baslik','option');  ?></a></h4>
                     </div>
                     <a href="#">
                        <div class="thumb rounded">
                           <div class="inner data-bg-image" data-bg-image="<?php echo $sayfa_ilk_resim['url']; ?>"></div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <section class="hero-carousel mt-5">
            <div class="container-xl">
               <div class="row gy-4">
                  <div class="section-header">
                     <h3 class="section-title">Başlıca Kategoriler</h3>
                  </div>
                  <div class="row post-carousel-featured post-carousel">
                     <?php 
                     $categories = get_categories();
                     foreach($categories as $category) { 
                        $image = get_field('kategori_genel_resim','category_'.$category->term_id);

                        /* echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';*/
                        ?>
                        
                     <!-- post -->
                     <div class="post featured-post-md">
                        <div class="details clearfix">
                           <h4 class="post-title"><a href="category?c=<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></h4>
                        </div>
                        <a href="#">
                           <div class="thumb rounded">
                              <div class="inner data-bg-image" data-bg-image="<?php echo $image['sizes']['medium_large']; ?>"></div>
                           </div>
                        </a>
                     </div>

                     <?php }?>
                  </div>
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
                           <h3 class="section-title">Popüler Yazılar</h3>
                        </div>
                        <?php 
                                    $args = array(
                                       'post_type' => 'makale',
                                       'posts_per_page' => '10',
                                    );
                           $my_posts = new WP_Query($args);
                           while ($my_posts->have_posts()) {
                                 $my_posts->the_post();

                                    $category_detail = get_the_category($post->ID);//$post->ID
                                    foreach($category_detail as $cd){
                                    $catname = $cd->cat_name;
                                    $catslug = $cd->slug;
                                    }
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
                                             <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/category?c=<?php echo $catslug; ?>"><?php echo $catname; ?></a></li>
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
                  </div>
               </div>
            </div>
         </section>

<?php include 'footer.php';?>
