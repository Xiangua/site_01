<?php
/**
 * @package WordPress
 * @subpackage StanleyWP
 * Template Name: Homepage Custo
 */
?>

<?php get_header(); ?>

<div class="home-wrap clearfix">
	<div class="container pt">
  		<div class="row mt centered">
    		<div class="col-lg-5">
    			<?php
				    $page = get_page_by_title( 'blog' );
				    $page_data = get_page( $page );
				    $title = $page_data->post_title;
				    $pageID = $page_data->ID;
				?>
     			<a class="zoom green" href="<?php echo get_permalink($page); ?>" title="<?php echo $title; ?>" >
     				<?php echo get_the_post_thumbnail($pageID); ?>
    			</a>
			</div>
			<div class="col-lg-2">
				<div class="row mt centered">
					<a href="https://facebook.com" title="Facebook" >
						<img src="<?php echo get_template_directory_uri();?>/images/facebook64.png" alt=""></img>
					</a>
				</div>
				<div class="row mt centered">
					<a href="pinterest.com" title="Pinterest" >
						<img src="<?php echo get_template_directory_uri();?>/images/pinterest64.png" alt=""></img>
					</a>
				</div>
			</div>
			<div class="col-lg-5">
				<?php
				    $page = get_page_by_title( 'ateliers' );
				    $page_data = get_page( $page );
				    $title = $page_data->post_title;
				    $pageID = $page_data->ID;
				?>
     			<a class="zoom green" href="<?php echo get_permalink($page); ?>" title="<?php echo $title; ?>" >
     				<?php echo get_the_post_thumbnail($pageID); ?>
    			</a>
			</div> <!-- /col -->
		</div><!-- /row -->
		<div class="row mt centered">
    		<div class="col-lg-6">
     			<?php
				    $page = get_page_by_title( 'stampinup' );
				    $page_data = get_page( $page );
				    $title = $page_data->post_title;
				    $pageID = $page_data->ID;
				?>
     			<a class="zoom green" href="<?php echo get_permalink($page); ?>" title="<?php echo $title; ?>" >
     				<?php echo get_the_post_thumbnail($pageID); ?>
    			</a>
			</div>
			<div class="col-lg-6">
     			<?php
				    $page = get_page_by_title( 'defis' );
				    $page_data = get_page( $page );
				    $title = $page_data->post_title;
				    $pageID = $page_data->ID;
				?>
     			<a class="zoom green" href="<?php echo get_permalink($page); ?>" title="<?php echo $title; ?>" >
     				<?php echo get_the_post_thumbnail($pageID); ?>
    			</a>
			</div> <!-- /col -->
		</div><!-- /row -->
</div><!-- /container -->  
</div><!-- END home-wrap -->

<?php get_footer(); ?>