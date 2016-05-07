<?php get_header()?>
<div id="content" class="clearfix">
  <div id="main" class="col-sm-8 clearfix" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
      <header>
          <h1 class="page-title main-page-title" itemprop="headline">
            <?php the_title(); ?>
          </h1>
          <?php if (function_exists('mywiki_custom_breadcrumbs')) mywiki_custom_breadcrumbs(); ?>
      </header>
      <!-- end article header -->
      
      <section class="post_content clearfix" itemprop="articleBody">
        <?php the_content(); ?>
      </section>
      <!-- end article section -->
      
    </article>
    <!-- end article -->
    <?php endwhile; ?>
    <?php endif; ?>
    <?php comments_template( '', true ); ?>
  </div>
  <!-- end #main -->
  
  <?php  get_sidebar(); // sidebar 1 ?>
</div>
<!-- end #content -->
<?php get_footer();?>
