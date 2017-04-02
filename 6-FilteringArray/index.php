<?php 

class Post
{
	public $title;
	
	public $published;

	public $author;

	public function __construct($title, $author, $published)
	{
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', 'JW', true),
	new Post('My Second Post', 'JW', true),
	new Post('My Third Post', 'JW', true),
	new Post('My Fourth Post', 'JW', false)
]; 

// $unpublishedPosts = array_filter($posts, function($post){
// 	return ! $post->published;
// });
// var_dump($unpublishedPosts);

// $modified = array_map(function ($post){
// 	$post->published = true;

// 	return $post;
// }, $posts);
// var_dump($modified);

// Array
// $modified = array_map(function ($post){
// 	return (array) $post;
// }, $posts);
// var_dump($modified);

// Subset
// $modified = array_map(function ($post){
// 	return ['title' => $post->title];
// }, $posts);
// var_dump($modified);

// Get Title
// $modified = array_map(function ($post){
// 	return $post->title;
// }, $posts);
// var_dump($modified);

// Array Column mixed with (array) posts
// foreach ($posts as $index => $post) 
// {
// 	$posts[$index] = (array) $post;
// }
// $titles = array_column($posts, 'title');
// var_dump($titles);

// Get Author
// $posts = array_map(function ($post){
// 	return (array) $post;
// }, $posts);
// $titles = array_column($posts, 'author');
// var_dump($titles);

// // Set key of the Author with Title
// $posts = array_map(function ($post){
// 	return (array) $post;
// }, $posts);
// $authors = array_column($posts, 'author', 'title');
// var_dump($authors);
