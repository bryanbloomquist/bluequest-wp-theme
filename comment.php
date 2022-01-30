<div class="comments">

    <h3 class="comments__heading">Comments</h3>

    <?php 

        //   ___  _         _              ___                         _        //
        //  |   \(_)____ __| |__ _ _  _   / __|___ _ __  _ __  ___ _ _| |_ ___  //
        //  | |) | (_-< '_ \ / _` | || | | (__/ _ \ '  \| '  \/ -_) ' \  _(_-<  //
        //  |___/|_/__/ .__/_\__,_|\_, |  \___\___/_|_|_|_|_|_\___|_||_\__/__/  //
        //            |_|          |__/                                         //

        $comments_args = array(
            'walker'            => null,
            'max_depth'         => '',
            'style'             => 'ul',
            'callback'          => null,
            'end-callback'      => null,
            'type'              => 'all',
            'page'              => '',
            'per_page'          => '',
            'avatar_size'       => 32,
            'reverse_top_level' => null,
            'reverse_children'  => '',
            'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
            'short_ping'        => false,   // @since 3.6
            'echo'              => true     // boolean, default is true
        ); 

        wp_list_comments($comments_args, $comments);

        //   ___  _         _              ___                         _     ___                //
        //  |   \(_)____ __| |__ _ _  _   / __|___ _ __  _ __  ___ _ _| |_  | __|__ _ _ _ __    //
        //  | |) | (_-< '_ \ / _` | || | | (__/ _ \ '  \| '  \/ -_) ' \  _| | _/ _ \ '_| '  \   //
        //  |___/|_/__/ .__/_\__,_|\_, |  \___\___/_|_|_|_|_|_\___|_||_\__| |_|\___/_| |_|_|_|  //
        //            |_|          |__/                                                         //

        //Declare Vars
        $comment_send = 'Send';
        $comment_reply = 'Leave a Message';
        $comment_reply_to = 'Reply';
        $comment_author = 'Name';
        $comment_email = 'E-Mail';
        $comment_body = 'Comment';
        $comment_url = 'Website';
        $comment_cookies_1 = ' By commenting you accept the';
        $comment_cookies_2 = ' Privacy Policy';
        $comment_before = 'Registration isn\'t required.';
        $comment_cancel = 'Cancel Reply';
        
        //Array
        $comment_form_args = array(
            //Define Fields
            'fields' => array(
                //Author field
                'author' => '<p class="comment-form-author"><br /><input id="author" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></p>',
                //Email Field
                'email' => '<p class="comment-form-email"><br /><input id="email" name="email" placeholder="' . $comment_email .'"></input></p>',
                //URL Field
                'url' => '<p class="comment-form-url"><br /><input id="url" name="url" placeholder="' . $comment_url .'"></input></p>',
                //Cookies
                'cookies' => '<input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
            ),
            // Change the title of send button
            'label_submit' => __( $comment_send ),
            // Change the title of the reply section
            'title_reply' => __( $comment_reply ),
            // Change the title of the reply section
            'title_reply_to' => __( $comment_reply_to ),
            //Cancel Reply Text
            'cancel_reply_link' => __( $comment_cancel ),
            // Redefine your own textarea (the comment body).
            'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></p>',
            //Message Before Comment
            'comment_notes_before' => __( $comment_before),
            // Remove "Text or HTML to be displayed after the set of comment fields".
            'comment_notes_after' => '',
            //Submit Button ID
            'id_submit' => __( 'comment-submit' ),
        );
        comment_form( $comment_form_args );
    ?>

</div>