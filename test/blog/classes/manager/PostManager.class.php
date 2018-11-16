<?php
    interface PostManager {
        public function addPost(string $title, string $body, User $user): int;
        public function findAllPosts(): array;
        public function findPostById(int $id) :Post;
        public function removePost(int $id);
    }
    