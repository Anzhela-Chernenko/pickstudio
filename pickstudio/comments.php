
<div class="comment-outer">
    <?php
    $args_comments = array(
        'max_depth'         => '3',
        'reply_text'        => 'Ответить на комментарий'

    );
    wp_list_comments($args_comments);


    $defaults = [
        'fields'               => [
            'author' => '<div class="f__list"><p class="comment-form-author">
			<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
			<input required="required" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' />
		</p>',
            'email'  => '<p class="comment-form-email">
			<label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> 
			<input required="required" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />
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
    ?>

    <div class="row">
        <div class="col-md-6 ourService__title">
            <p class="ourServiceData">
                Оставить комментарий</span>
            </p>
        </div>
        <div class="col-md-6 ourService__decor">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/3.png" alt="" class="lines">
        </div>
    </div>
</div>
<?php
    comment_form( $defaults );


    ?>

    <?php $args_comment = array(
        'class_form'      => 'sendQuestion__form',
        'label_submit'      => __( 'Отправить' )
    );  ?>
</div>

<?php

?>