<?php

namespace Repository;
use Model\Comment;

interface CommentRepository
{
    public function insert(Comment $comment): Comment;

    public function findById(int $id): ?Comment;

    public function findAll(): array;

    // public function delete(int $id): void;
}

class CommentRepositoryImpl implements CommentRepository
{
    public function __construct(private \PDO $connection)
    {
    }

    public function insert(Comment $comment): Comment
    {
        $sql = "INSERT INTO comment(email, comment) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$comment->getEmail(),$comment->getComment()]);

        $id = $this->connection->lastInsertId();
        $comment->setId($id);

        return $comment;
    }

    public function findById(int $id): ?Comment
    {
        $sql = "SELECT * FROM comment WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);

        if($row = $statement->fetch()){
            return new Comment(
                id: $row['id'],
                email: $row['email'],
                comment: $row['comment']
            );
        } else {
            return null;
        }
    }
    
    public function findAll(): array
    {
        $sql = "SELECT * FROM comment";
        $statement = $this->connection->query($sql);
        $comments = [];

        while ($row = $statement->fetch()) {
            $comments[] = new Comment(
                id: $row['id'],
                email: $row['email'],
                comment: $row['comment']
            );
        }

        return $comments;
    }
}