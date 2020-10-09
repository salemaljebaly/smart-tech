<?php
if ( comments_open() ): // check if comment open from admin
    ?>
    <h3 class="alert alert-secondary"
        role="alert"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></h3>
    <?php
    echo "<ul class='list-unstyled comment-list'>";
    $comment_args = array(
        'max_depth'         => 3,
        'type'              => 'comment',
        'avatar_size'       => 60,
        'reverse_top_level' => true
    );
    wp_list_comments( $comment_args );
    echo "</ul>";
    comment_form();
else: ?>
    <div class="alert alert-warning" role="alert">
        Comments are disabled :(
    </div>
<?php endif;
?>