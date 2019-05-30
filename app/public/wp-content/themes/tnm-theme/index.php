<?php get_header(); ?>
<section class="section-block section-trend">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="saga-title-wrapper saga-title-wrapper-1">
                    <h2 class="saga-title">
                        <span class="primary-background">
                            Latest Posts                                            
                            </span>
                    </h2>
                </div>
            </div>
            <?php
            $latest_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'any'
            ));
            while ($latest_posts->have_posts()) {
                $latest_posts->the_post();
                ?>
            <div class="col-md-4 col-sm-4">
                <div class="trending-item-content primary-background border-overlay">
                    <a href="http://team-night-moose.local/a-paradise-for-holiday/" class="bg-image bg-image-1 bg-opacity">
                        <img class="trending-post-img" src="http://team-night-moose.local/wp-content/uploads/2019/04/sea.jpg">                                            </a>
                    <div class="post-content border-overlay-content">
                        <div class="post-cat primary-font">
                        </div>
                        <h2 class="entry-title entry-title-1">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
    <div class="home-upper-widgetarea homepage-widget-fullwidth">
    <div class="home-primary-sidebar">
            </div>
    </div>

<section class="section-block section-latest-block"><div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            
<?php while (have_posts()) {
    the_post();
    // $category = get_the_category(); 
    // $mainCategory = $category[0]->cat_name;
    $mainCategory = get_the_category_list(", "); 
    $categoryID = get_cat_ID($mainCategory);
    $categoryLink = get_category_link($categoryID);
    $archive_year = get_the_time('Y');
    $archive_month = get_the_time('m');
    $archive_day = get_the_time('d'); 
    // if ($mainCategory != 'Team') {
    ?>
    <article id="post-<?php echo the_ID(); ?>" class="post-<?php echo the_ID();?> post type-post status-publish format-standard hentry category-uncategorized">
        <header class="entry-header">
            <h2 class="entry-title"><a href="<?php echo get_the_permalink(); ?>" rel="bookmark"><? the_title() ?></a></h2>
            <div class="entry-meta">
                <span class="posted-on">Published on <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>" rel="bookmark">
                    <time class="entry-date published updated" ><?php the_time('F j, Y'); ?>
                    </time>
                    </a>
                </span>
                <span class="byline"> by 
                    <span class="author vcard"><a class="url fn n" href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                    </span>
                </span>
            </div><!-- .entry-meta -->
        </header><!-- .entry-header -->
        
        <div class="entry-content">
            <p><?php echo the_content(); ?></p>
        </div><!-- .entry-content -->

        <footer class="entry-footer">

            <span class="cat-links">Published in <a href="<?php echo $categoryLink; ?>" rel="category tag">
            <?php
             echo $mainCategory;
             ?></a></span>	</footer><!-- .entry-footer -->
    </article><!-- #post-1 -->

    <?php 
    // }
}
?>


        </main><!-- #main -->
    </div><!-- #primary -->



</div></section>


<?php get_footer(); ?>