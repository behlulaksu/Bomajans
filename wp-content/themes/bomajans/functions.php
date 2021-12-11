<?php 
/****************************Filter**************************************/
  function wp_remove_menus(){
    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'jetpack' );                    //Jetpack* 
    remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'themes.php' );                 //Appearance
    remove_menu_page( 'plugins.php' );                //Plugins
    remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
  }
  add_action( 'admin_menu', 'wp_remove_menus' );

  // wordpress versiyonu gizleme kodu
  function complete_version_removal() {
  return ' ';
  }
  add_filter('the_generator', 'complete_version_removal');



  /********************************************ACF******************************************************************************/



  add_filter('acf/settings/path', 'my_acf_settings_path');

 

  function my_acf_settings_path( $path ) {

      $path = get_stylesheet_directory() . '/assets/acf/';

      return $path;

  }





  add_filter('acf/settings/dir', 'my_acf_settings_dir');

   

  function my_acf_settings_dir( $dir ) {

      $dir = get_stylesheet_directory_uri() . '/assets/acf/';

      return $dir;

      

  }



  //add_filter('acf/settings/show_admin', '__return_false');



  include_once( get_stylesheet_directory() . '/assets/acf/acf.php' );



  if( function_exists('acf_add_options_page') ) {



    acf_add_options_page(array(/*ana sayfa ayarlari*/

      'page_title'  => 'Sayfa Genel Ayarları',

      'menu_title'  => 'Sayfa Gene Ayarları',

      'menu_slug'   => 'genel-ayarlari',

      'parent_slug' => '',

      'capability'  => 'manage_options',

      'redirect'    => false

    ));    

 
  }

/*********************************************************************************/

  /*****************************************************************************/
    function add_services() {
      $args = array(
        'label' => 'Makaleler',
        'public' => true,
        'hierarchical' => true,
        'publicly_queryable'  => true, //sayfalama olayını kapat.
        'menu_position' => 2,
        'rewrite' => array('slug' => 'makale'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array(
          'title',
          'editor',
          'thumbnail'

        ),
      'taxonomies' => array('topics', 'category' ),
          );
      register_post_type( 'makale', $args );
    

    
  }
  //add_theme_support( 'post-thumbnails' );
    add_action( 'init', 'add_services' );




/*****************thema sport*********************/
  function ilktemam_setup() {
       add_theme_support( 'post-thumbnails' );
  }
  add_action( 'after_setup_theme', 'ilktemam_setup' );


/*****************thema sport*********************/

/*************kucuk resim baslangic******************/
if ( !function_exists('AddThumbColumn') && function_exists('add_theme_support') ) {
    // for post and page
    add_theme_support('post-thumbnails', array( 'post', 'page' ) );

    function AddThumbColumn($cols) {

        $cols['thumbnail'] = __('Thumbnail');

        return $cols;
    }

    function AddThumbValue($column_name, $post_id) {

            $width = (int) 150;
            $height = (int) 150;

            if ( 'thumbnail' == $column_name ) {
                // thumbnail of WP 2.9
                $thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );
                // image from gallery
                $attachments = get_children( array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image') );
                if ($thumbnail_id)
                    $thumb = wp_get_attachment_image( $thumbnail_id, array($width, $height), true );
                elseif ($attachments) {
                    foreach ( $attachments as $attachment_id => $attachment ) {
                        $thumb = wp_get_attachment_image( $attachment_id, array($width, $height), true );
                    }
                }
                    if ( isset($thumb) && $thumb ) {
                        echo $thumb;
                    } else {
                        echo __('None');
                    }
            }
    }

    // for posts
    add_filter( 'manage_posts_columns', 'AddThumbColumn' );
    add_action( 'manage_posts_custom_column', 'AddThumbValue', 10, 2 );

    // for pages
    add_filter( 'manage_pages_columns', 'AddThumbColumn' );
    add_action( 'manage_pages_custom_column', 'AddThumbValue', 10, 2 );
}


   /************Login ekrani duzenleme kismi************************************/ 
function login_panel_edit(){
  include('style-login.php');
}
add_action('login_enqueue_scripts','login_panel_edit');


   /************Ana giris ekrani duzenleme************************************/ 
function main_panel_edit(){
  include('style-admin.php');
}
add_action('admin_head','main_panel_edit');


function giris_title_edit(){
  return ;
}
add_filter('login_headertitle','giris_title_edit');

function giris_logo_link(){
  return home_url();
}
add_filter('login_headerurl','giris_logo_link');


?>