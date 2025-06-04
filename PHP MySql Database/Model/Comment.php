<?php

namespace Model;

class Comment
{
    public function __construct(private ?int $id = null,
                                private ?string $email = null,
                                private ?string $comment = null)
    {         
    }
     // Getter and Setter for id
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    // Getter and Setter for email
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    // Getter and Setter for comment
    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

}