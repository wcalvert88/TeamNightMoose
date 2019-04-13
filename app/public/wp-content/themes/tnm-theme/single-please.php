testing<?php get_header(); ?>
    <div class="wrapper inner-banner">
    <div class="entry-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="primary-font twp-bredcrumb">
                        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb"><ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList"><meta name="numberOfItems" content="2" /><meta name="itemListOrder" content="Ascending" /><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin"><a href="http://templatetesting.local" rel="home"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end"><span itemprop="name"><?php the_title(); ?></span><meta itemprop="position" content="2" /></li></ul></div>                                </div>
                </div>
                <div class="col-sm-12">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
$teamPosts = new WP_Query(array(
    'posts_per_page' => 5,
    'post_type' => 'please'
));
while($teamPosts->have_posts()) {
    $teamPosts->the_post();
    ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        
            <article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> page type-page status-publish hentry">
                <h2 class='post-title'><?php the_title(); ?></h2>
                <div class="entry-content">
    
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                <span class="edit-link"><a class="post-edit-link" href="<?php home_url(); ?>/wp-admin/post.php?post=<?php the_ID(); ?>&#038;action=edit">Edit <span class="screen-reader-text"><?php the_title(); ?></span></a></span>		
                </footer><!-- .entry-footer -->
            </article><!-- #post-2 -->

        </main><!-- #main -->
    </div><!-- #primary -->
</div>
<?php } ?>

<!-- Sidebar.php not sure it's necessary -->
</div><!-- #content -->


<?php get_footer(); ?>