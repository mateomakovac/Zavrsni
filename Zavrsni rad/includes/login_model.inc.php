<?php

declare(strict_types=1);

function get_user( object $pdo, string $username) 
{
    $connect = "SELECT * FROM korisnici WHERE username = :username;";
    $stmt = $pdo->prepare($connect);
    $stmt ->bindParam(":username", $username);
    $stmt->execute();

    $rezultat = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rezultat;
}