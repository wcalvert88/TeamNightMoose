
<div id="comments" class="comments-area">

<h2 class="comments-title primary-font">
    <?php comments_number();?> on &ldquo;<span><?php the_title(); ?></span>&rdquo;
</h2><!-- .comments-title -->


<ol class="comment-list">
        <li id="comment-<?php echo get_comment_id(); ?>" class="comment even thread-even depth-1">
<article id="div-comment-<?php echo get_comment_id(); ?>" class="comment-body">
    <footer class="comment-meta">
        <div class="comment-author vcard">
            <img alt='' src='http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=70&#038;d=mm&#038;r=g' srcset='http://1.gravatar.com/avatar/d7a973c7dab26985da5f961be7b74480?s=140&#038;d=mm&#038;r=g 2x' class='avatar avatar-70 photo' height='70' width='70' />						<b class="fn"><a href='https://wordpress.org/' rel='external nofollow' class='url'><?php echo get_comment_author(); ?></a></b> <span class="says">says:</span>					</div><!-- .comment-author -->

        <div class="comment-metadata">
            <a href="http://templatetesting.local/hello-world/#comment-1">
                <time datetime="2019-04-10T20:27:03+00:00"><?php comment_time(); ?></time>
            </a>
            <span class="edit-link"><a class="comment-edit-link" href="http://templatetesting.local/wp-admin/comment.php?action=editcomment&#038;c=1">Edit</a></span>					</div><!-- .comment-metadata -->

                        </footer><!-- .comment-meta -->

    <div class="comment-content">
        <p><?php echo get_comment_text(); ?></p>
    </div><!-- .comment-content -->

    <div class="reply"><a rel='nofollow' class='comment-reply-link' href='/hello-world/?replytocom=1#respond' data-commentid="<?php echo get_comment_id(); ?>" data-postid="<?php echo get_comment_id(); ?>" data-belowelement="div-comment-<?php echo get_comment_id(); ?>" data-respondelement="respond" aria-label='Reply to <?php echo get_comment_author(); ?>'>Reply</a></div>			</article><!-- .comment-body -->
</li><!-- #comment-## -->
</ol><!-- .comment-list -->

<div id="respond" class="comment-respond">
    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/hello-world/#respond" style="display:none;">Cancel reply</a></small>
    </h3>
    <?php
    $currentUser = wp_get_current_user();
    $currentUserName = $currentUser->user_login;
    ?>	
    <form action="http://templatetesting.local/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
        <p class="logged-in-as"><a href="http://templatetesting.local/wp-admin/profile.php" aria-label="Logged in as <?php echo $currentUserName;  ?>. Edit your profile.">Logged in as <?php echo $currentUserName; ?></a>. <a href="http://templatetesting.local/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Ftemplatetesting.local%2Fhello-world%2F&amp;_wpnonce=1a9bb13e13">Log out?</a></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /> <input type='hidden' name='comment_post_ID' value='1' id='comment_post_ID' />
    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
    </p><input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="58171e1fa4" /><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
    </form>
    </div><!-- #respond -->

</div><!-- #comments -->