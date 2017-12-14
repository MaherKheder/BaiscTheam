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

                    <img class="img-responsive img-thumbnail" src="<?php the_post_thumbnail_url() ?>" alt="">

                    <div class="post-content">
                        <?php the_excerpt() ?>
                    </div>
                    <hr>
                    <div class="categories">
                        <i class="fa fa-tags"></i>
                        <?php the_category(', ') ?>
                        <?php the_tags(', ') ?>
                    </div>
                </div>

                <div class="posts-pergention">
                    <?php previous_post_link('%link','%title', true) ?>
                    <?php next_post_link('%link', '%title', true) ?>
                </div>
                
                <div class="">
                    <p class="autho-stats">
                        User Posts Count: <span><?php echo count_user_posts(get_the_author_meta('ID')) ?></span>
                        User Profile Link: <?php the_author_posts_link() ?>
                    </p>
                    <?php echo get_avatar(get_the_author_meta('ID'), 64, '', 'Author Avatar', array(
                            'class' => 'img-responsice img-thumbnail',
                    )) ?>
                    <h4>
                        <?php echo the_author_meta('first_name'); ?>
                        <?php the_author_meta('nickname') ?>
                    </h4>
                    <?php if (get_the_author_meta('description')): ?>
                        <p><?php the_author_meta('description') ?></p>
                    <?php endif; ?>
                </div>

                <?php comments_template() ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>