<?php

// if comments is allowed in thie post
if(comments_open()){

    comments_number();
    $comments_arguments = array(

        'max_depth'         => 3,
        //
        'type'              => 'comment',
        'avatar_size'       =>64,
        // new to old
        'reverse_top_level' => true
    );

    wp_list_comments($comments_arguments);

    comment_form(array(
        'class_submit'      => 'btn btn-primary btn-md'
    ));
}
else{
    echo 'The comments is not allowed in this Post';
}