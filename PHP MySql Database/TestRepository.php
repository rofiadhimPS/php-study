<?php

require_once __DIR__ . "/GetConnection.php";
require_once __DIR__ . "/Repository/CommentRepository.php";
require_once __DIR__ . "/Model/Comment.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();
$commentRepository = new CommentRepositoryImpl($connection);

// $comment = new Comment(
//     email: "adhim@test.com",
//     comment: "This is a test comment"
// );
// $insertedComment = $commentRepository->insert($comment);

// echo "Inserted Comment ID: " . $insertedComment->getId() . "\n";
// echo "Email: " . $insertedComment->getEmail() . "\n";

// $commentId = $commentRepository->findById(32);
// var_dump($commentId);

$comments = $commentRepository->findAll();
var_dump($comments);

$connection = null;