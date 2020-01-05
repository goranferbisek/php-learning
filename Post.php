<?php

class Post
{
    public $title;
    public $published;
    
    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My third post', true),
    new Post('My fourth post', false)
];

/* filter unpublished posts */
$unpublishedPosts = array_filter($posts, function($post) {
    return ! $post->published;
});


/* modifiy array elements - set all to true */
$modified = array_map(function ($post) {
    $post->published = true;
    return $post;
}, $posts);

/* equal to */
foreach($posts as $post) {
    $post->published = true;
}

var_dump($posts);

/* get column of an array */
$titles = array_column($posts, 'title');

//var_dump($titles);