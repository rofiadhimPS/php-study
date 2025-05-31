<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    final public function login(string $name, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    // ERROR
    // public function login(string $name, string $password): bool
    // {
    //     return true;
    // }
}