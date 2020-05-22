<?php
/*
 Template Name: Отзывы
 */
?>
<?php
get_header();
?>
<?php
$args = array(

    'no_found_rows'       => true,
    'orderby'             => '',
    'order'               => 'DESC',
    'post_id'             => 194,
    'status'              => 'all',
    'date_query'          => null,
    'hierarchical'        => false,
    'update_comment_meta_cache'  => true,
    'update_comment_post_cache'  => false,
);

$commentList= get_comments( $args );
$count_comment = count($commentList);
?>
    <div class="container">
    <div class="row">
    <div class="col-md-6 ourService__title">
        <p class="ourServiceData">
            Всего отзывов <span>(<?= $count_comment; ?>)</span>
        </p>
    </div>
        <div class="col-md-6 ourService__decor">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
        </div>
    </div>
    </div>
<?php
foreach ($commentList as $comment_item){

    ?>
    <div class="container">

        <div class="row authorAdmin">
            <div class="col-md-2 avatar">
                <img class="picAvatar" src="<?php echo bloginfo('template_url');?>/assets/images/45.png">
            </div>
            <div class="col-md-10 authorMotto">
                <h5 class="admin__title"><?php echo "$comment_item->comment_author"; ?></h5>
                <p class="author__subtitle">
                    <?= the_time('d F Y'); ?>
                </p>
                <p class="admin__info"><?php echo "$comment_item->comment_content"; ?> </p>
            </div>
        </div>





    <?php
}
?>
    <div class="row">
        <div class="col-md-6 ourService__title">
            <p class="ourServiceData">
                Оставить отзыв</span>
            </p>
        </div>
        <div class="col-md-6 ourService__decor">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
        </div>
    </div>
<?php
$defaults = [
    'fields'               => [
        'author' => '<div class="f__list"><p class="comment-form-author">
			<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
			<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />
		</p>',
        'email'  => '<p class="comment-form-email">
			<label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> 
			<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
		</p></div></div>'
    ],
    'comment_field'        => '<div class="f_wrapper"><div class="f__add__data"><p class="comment-form-comment">
		<label class="l__comment" for="comment">' . _x( 'Comment', 'noun' ) . '</label>
		<textarea id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea>
	</p></div>',

    'comment_notes_after'  => '',
    'id_form'              => 'commentform',
    'id_submit'            => 'submit',
    'class_form'           => 'comment-form',
    'class_submit'         => 'submit',
    'name_submit'          => 'submit',
    'title_reply'          => __( 'Leave a Reply' ),
    'title_reply_to'       => __( 'Leave a Reply to %s' ),
    'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
    'title_reply_after'    => '</h3>',
    'cancel_reply_before'  => ' <small>',
    'cancel_reply_after'   => '</small>',
    'cancel_reply_link'    => __( 'Cancel reply' ),
    'label_submit'         => __( 'Post Comment' ),
    'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
    'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
    'format'               => 'xhtml',
];

comment_form( $defaults );



?>
    </div>









<?php

get_template_part('template-parts/section_footer');
?>