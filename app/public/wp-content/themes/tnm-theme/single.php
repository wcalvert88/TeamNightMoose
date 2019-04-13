<?php 
get_header();
while(have_posts()) {
    the_post();
    $mainCategory = get_the_category_list(", "); 
    $categoryID = get_cat_ID($mainCategory);
    $categoryLink = get_category_link($categoryID);
?>

<div class="wrapper inner-banner">
    <div class="entry-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="primary-font twp-bredcrumb">
                        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                            <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <meta name="numberOfItems" content="3" />
                                <meta name="itemListOrder" content="Ascending" />
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
                                    <a href="<?php echo get_home_url(); ?>" rel="home">
                                    <span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item">
                                    <a href="<?php echo $categoryLink; ?>">
                                    <span itemprop="name"><?php echo $mainCategory; ?></span>
                                    </a>
                                    <meta itemprop="position" content="2" />
                                    </li>
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end"><span itemprop="name"><?php the_title(); ?></span><meta itemprop="position" content="3" />
                                    </li>
                                </ul>
                            </div>                                
                        </div>
                    </div>

                <div class="col-sm-12">
                    <h1 class="entry-title"><?php the_title(); ?></h1>  
                    <header class="entry-header">
                        <div class="entry-meta entry-inner primary-font small-font">
                        <span class="posted-on">Published on <a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>" rel="bookmark">
                            <time class="entry-date published updated" ><?php the_time('F j, Y'); ?>
                            </time>
                            </a>
                        </span>
                        <span class="byline"> by 
                            <span class="author vcard"><a class="url fn n" href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
                            </span>
                        </span>
                        <!-- <span class="posted-on">Published on <a href="http://templatetesting.local/2019/04/" rel="bookmark"><time class="entry-date published updated" datetime="2019-04-10T20:27:03+00:00">April 10, 2019</time></a></span><span class="byline"> by <span class="author vcard"><a class="url fn n" href="http://templatetesting.local/author/wcalvert88/">wcalvert88</a></span></span>                                        </div> -->
                    </header>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="content" class="site-content">

<div id="primary" class="content-area">
<main id="main" class="site-main">


<article id="post-1" class="post-1 post type-post status-publish format-standard hentry category-uncategorized">

<div class="entry-content">

<p><?php the_content(); ?></p>
</div><!-- .entry-content -->

<footer class="entry-footer">
<span class="cat-links">Published in <a href="<?php echo $categoryLink; ?>" rel="category tag"><?php
             echo $mainCategory;
             ?></a></span>
                <span class="edit-link"><a class="post-edit-link" href="<?php echo get_edit_post_link(); ?>">Edit <span class="screen-reader-text"><?php the_title();?></span></a></span>	</footer><!-- .entry-footer -->
</article><!-- #post-1 -->


</main><!-- #main -->
</div><!-- #primary -->


<!-- sidebar.php goes here if wanted -->
    </div><!-- #content -->

<?php
}
get_footer();
?>