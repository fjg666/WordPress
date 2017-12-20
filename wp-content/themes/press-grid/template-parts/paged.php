<?php
if( isset($_POST['paged']) ){
    $posts = Press_Grid_Post::get_posts();
    echo json_encode($posts);
    exit;
}