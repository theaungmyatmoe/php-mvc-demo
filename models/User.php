<?php

class User
{
    public function __construct(
        public string $name = 'John Doe',
        public string $email = 'johndoe@gmail.com',
        public int    $age = 30,
    )
    {
        //
    }
}