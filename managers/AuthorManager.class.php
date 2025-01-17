<?php
require __DIR__ . '/../connexion.php';

class AuthorManager
{
    public function __construct(private PDO $db, private ?array $users = []) {}
}
