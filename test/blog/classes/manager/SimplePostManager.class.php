<?php
    require_once('PostManager.class.php');
    require_once(__DIR__.'/../Post.class.php');

    class SimplePostManager implements PostManager
    {
        public function __constructor() {
            if(isset($_SESSION['posts']) && isset($_SESSION['count'])) {

            } else {
                $_SESSION['posts'] = array();
                $_SESSION['count'] = 0;
            }
        }
        public function addPost(string $title, string $body, User $user): int
        {
            $post = new Post();
            $post = $_SESSION['count'];
            $post->setTitle($title);
            $post->setBody($body);
            $post->setUser($user);
            $_SESSION['count']++;
            $_SESSION['posts'][] = $post;
        }
        public function findAllPosts(): array
        {
            return $_SESSION['posts'];
        }
        public function findPostById(int $id) :Post
        {
            foreach($_SESSION['posts'] as $post){
                if($post->getId() === $id){
                    return $post;
                }
            }
        }
        public function removePost(int $id)
        {
            foreach($_SESSION['posts'] as $post){
                if($post->getId() === $id){
                    
                }
            }
        }
    }
    