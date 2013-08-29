<?php 
/*
Template Name: Automagic Sitemap
will automatically generate a sitemap using all pages, posts, and categories.
*/
 ?>
 <?php get_header(); ?>
    
    <div id="content">
    <?php 
    //THE LOOP.
    if( have_posts() ): 
        while( have_posts() ):
        the_post(); ?>
    
        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
            <h2 class="entry-title"> <a href="<?php the_permalink(); ?>"> 
                <?php the_title(); ?> 
            </a></h2>
             
           <!-- added divs here to separate the contentusing the div attibutes in the css  -->
            <div class="entry-content">
                <div class="onethird">
                  <h3>Pages:</h3>
                    <ul><?php wp_list_pages( array(
                        'title_li' => '',
                      ) ); ?>
                    </ul>
                      <hr />
                    <h3>Yearly Archives</h3>
                    <ul><?php wp_get_archives(array(
                    'type' => 'yearly'
                    )); ?></ul>

                </div>
                <div class="onethird">
                  <h3>Blog Posts:</h3>
                    <ul><?php wp_get_archives( array(
                        'type' => 'alpha', // each post, in alpha order by title
                      ) ); ?></ul>
                    
                </div>
                <div class="onethird">
                  <h3>RSS Feeds</h3>
                      <ul>
                        <li><a href="<?php bloginfo( 'rss2_url' ); ?>">Blog Posts Feed</a></li>
                        <li><a href="<?php bloginfo( 'comments_rss2_url' ); ?>">Comments Feed</a></li>
                      </ul>
                        <hr />
                  <h3>Blog Categories:</h3>
                  <ul>
               <?php wp_list_categories(array(
            'show_count' => 1,
          'number' => 10,
          'orderby' => 'count',
          'order' => 'desc',
          'title_li' => ''
          
         )); ?>                
            </ul>
                    <!-- <ul><php wp_list_categories( array(
                        'title_li' => '', // each category, in list order by title
                        'feed_image' => get_bloginfo( 'template_directory' ) . '/images/icon_feed.png',
                      ) ); ?></ul> -->
                        <hr />
                     <h3>Monthly Posts To Date:</h3>
                    <ul><?php wp_get_archives( array(
                        'show_count' => 1,
                        'number' => 10,
                        'orderby' => 'count',
                        'order' => 'desc',
                        'title_li' => ''
                      ) ); ?></ul>
   
                </div>
            </div>
       
        
        <?php comments_template(); ?>
         </article><!-- end post -->
      <?php 
      endwhile;
      else: ?>

      <h2>Sorry, no posts found</h2>

      <?php endif; //END OF LOOP. ?>
        
    </div><!-- end content -->
    

<?php get_footer(); ?>  