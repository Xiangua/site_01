<?php
/**
 * Blog Template
 *
   Template Name: Blog
 *
 * @file           blog.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */
   ?>
   <?php get_header(); ?>
   <?php global $more; $more = 0; ?>


   <?php
   global $wp_query;
   if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
  } elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
  } else {
    $paged = 1;
  }
  query_posts( array( 'post_type' => 'post', 'paged' => $paged ) );
  ?>   

  <div class="container" >
     <div class="col-lg-9" >
  <?php if (have_posts()) : ?>

  <?php
  $c = 0; 
  $color_id = 'grey';
  ?>

  <?php while (have_posts()) : the_post(); ?>

  <?php
         $c++; // increment the counter
         if( $c % 2 != 0) {
          $color_id = 'grey';
        } else {
          $color_id = 'white'; }
          ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

           <div id="<?php echo $color_id ?>">
            <div>
              <div class="row">
                <div class="col-lg-9 col-lg-offset-2">

                  <section class="post-meta">          
                    
                         <p><bd><time class="post-date"><?php the_date(); ?></time></bd></p>                
                  </section><!-- end of .post-meta -->

                  <header>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                      <h4 class="post-title"><?php the_title(); ?></h4>
                    </a>
                  </header>
                  <section class="post-entry">
                    <?php if ( has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                      <?php the_post_thumbnail(); ?>
                    </a>
                  <?php endif; ?>

                  


                  <?php the_content(); ?>

                  <?php custom_link_pages(array(
                    'before' => '<nav class="pagination"><ul>' . __(''),
                    'after' => '</ul></nav>',
                            'next_or_number' => 'next_and_number', # activate parameter overloading
                            'nextpagelink' => __('&rarr;'),
                            'previouspagelink' => __('&larr;'),
                            'pagelink' => '%',
                            'echo' => 1 )
                            ); ?>

                          </section><!-- end of .post-entry -->  
                        <section class="post-meta">          
                            <p class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?><ba><?php the_author_meta( 'display_name' ); ?></ba></p>
                               <!-- <p><bd><time class="post-date"><?php the_date(); ?></time></bd></p>  --> 
                            
                              <span>
                                <?php comments_popup_link(__('Aucun Commentaire <i class="icon-arrow-down"></i>', 'gents'), __('1 Commentaire <i class="icon-arrow-down"></i>', 'gents'), __('% Commentaires <i class="icon-arrow-down"></i>', 'gents')); ?>
                              </span>
                            
                        </section><!-- end of .post-meta -->
                        </div>

                      </div><!-- /row -->
                    </div> <!-- /container -->
                  </div> 


                </article><!-- end of #post-<?php the_ID(); ?> -->



              <?php endwhile; ?> 

              <?php if (  $wp_query->max_num_pages > 1 ) : ?>
              <div class="">

              <div class="row">
                <div class="col-lg-9 col-lg-offset-2">
                  <hr>
              <nav>
                <ul class="pager">
                 <li class="next"><?php next_posts_link( __( ' Anciens articles &#8250;', 'gents' ) ); ?></li>
                 <li class="previous"><?php previous_posts_link( __( '&#8249; Nouveaux articles', 'gents' ) ); ?></li>
               </ul><!-- end of .navigation -->
             </nav>
           </div>
         </div>
       </div>
           <?php endif; ?>

         <?php else : ?>

         <article id="post-not-found" class="hentry clearfix">
          <div class="">
              <div class="row">
                <div class="col-lg-9 col-lg-offset-2">
          <header>
           <h1 class="title-404">Désole aucun article ne correspond à votre recherche</h1>
           </header>
           <footer>
               <h7>Vous pouvez retourner à <a href="<?php echo home_url(); ?>/" title="Acceuil">&#9166; l'Acceuil</a> ou lancer une autre recherche : </h6>
               <?php get_search_form(); ?>
           </footer>
         </div>
         </div>
       </div>
       </article>

     <?php endif; ?>  


   </div> <!-- /col-lg-8 -->
   <div class="col-lg-3" style="margin-top:25px;">
      <?php dynamic_sidebar('footer-left'); ?>
  </div>
 </div> <!-- /col-lg-9 -->
  
</div> <!-- /row blog -->
   <?php get_footer(); ?>