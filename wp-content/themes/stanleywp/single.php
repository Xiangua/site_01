<?php
/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        StanleyWP
 * @author         Brad Williams & Carlos Alvarez
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

<div id="content">

  <?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div id="white" style="padding-bottom: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
          <h4 class="post-title"><?php the_title(); ?></h4>


          <?php if ( has_post_thumbnail() ) : ?>

          <p><?php the_post_thumbnail(); ?></p>
        <?php endif; ?>

        <section class="post-entry">
          <?php the_content(); ?>


          <?php if ( get_the_author_meta( 'description' ) != '' ) : ?>

          <div id="author-meta">
            <?php if ( function_exists( 'get_avatar' ) ) { echo get_avatar( get_the_author_meta( 'email' ), '80' ); }?>
            <div class="about-author"><?php _e( 'About', 'gents' ); ?> <?php the_author_posts_link(); ?></div>
            <p><?php the_author_meta( 'description' ) ?></p>
          </div><!-- end of #author-meta -->

        <?php endif; // no description, no author's meta ?>


        <?php custom_link_pages( array(
    'before' => '<nav class="pagination"><ul>' . __( '' ),
    'after' => '</ul></nav>',
    'next_or_number' => 'next_and_number', // activate parameter overloading
    'nextpagelink' => __( '&rarr;' ),
    'previouspagelink' => __( '&larr;' ),
    'pagelink' => '%',
    'echo' => 1 )
); ?>


                          </section><!-- end of .post-entry -->
                          <section class="post-meta">
                              <p><bd><time class="post-date"><?php the_date(); ?></time></bd></p>
                              <p class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?><ba><?php the_author_meta( 'display_name' ); ?></ba></p>
                          </section><!-- end of .post-meta -->
                          <footer class="article-footer">
                            <?php if ( bi_get_data( 'enable_disable_tags', '1' ) == '1' ) {?>
                            <div class="post-data">
                              <?php the_tags( __( 'TAGS:', 'gents' ) . ' ', ' - ', '<br />' ); ?>
                            </div><!-- end of .post-data -->
                            <?php } ?>

                            <div class="post-edit"><?php edit_post_link( __( 'Editer', 'gents' ) ); ?></div>
                          </footer>


                        </div>
                      </div>
                    </div>
                  </div>

              <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">

                    <ul class="pager">
                     <li class="previous"><?php next_post( '%','&#8249; Nouvel article : ','yes' ); ?></li>
                     <li class="next"><?php $next_post = get_previous_post(); previous_post( '% ','Ancien article : '.get_the_title( $next_post->ID ).' &#8250;','no' ); ?></li>
                   </ul><!-- end of .navigation -->

                 </div>
               </div>
             </div>

                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                      <?php comments_template( '', true ); ?>

                    </div>
                  </div>
                </div>

              <?php endwhile; ?>

              

         <?php else : ?>

         <article id="post-not-found" class="hentry clearfix">

           <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <header>
                 <h1 class="title-404"><?php _e( '404 &#8212; Fancy meeting you here!', 'gents' ); ?></h1>
               </header>
               <section>
                 <p><?php _e( 'Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'gents' ); ?></p>
               </section>
               <footer>
                 <h6><?php _e( 'You can return', 'gents' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'gents' ); ?>"><?php _e( '&#9166; Home', 'gents' ); ?></a> <?php _e( 'or search for the page you were looking for', 'gents' ); ?></h6>
                 <?php get_search_form(); ?>
               </footer>

             </div>
           </div>
         </div>

       </article>


     <?php endif; ?>

   </div><!-- end of #content -->



   <?php get_footer(); ?>
