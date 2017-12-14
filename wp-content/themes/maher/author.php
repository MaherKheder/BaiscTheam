<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="home-post">
                    <div class="post-title">
                        <?php the_post() // to active the post information ?>
                        <a href="<?php the_permalink() ?>"><h2><?php echo substr(get_the_title(), 0, 38) ?></h2></a>
                        <span class="post-author">
                            <i class="fa fa-user"></i> <?php the_author_link() ?>
                        </span>
                        <span class="post-date">
                            <i class="fa fa-calendar"></i> <?php the_time('F j, Y') ?>
                        </span>
                        <span class="post-comments">
                            <i class="fa fa-comments"></i>
                            <?php comments_popup_link('0 Comments', 'One Comment', '% Comments', 'comment-url') ?>
                        </span>
                    </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>