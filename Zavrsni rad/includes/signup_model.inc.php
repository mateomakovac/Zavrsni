<?php

//kontroliranje funkcija baze podataka
declare(strict_types=1);

function get_korisnicko_ime(object $pdo, string $username) {

    $connect = "SELECT username FROM korisnici WHERE username = :username;";
    $stmt = $pdo->prepare($connect);
    $stmt ->bindParam(":username", $username);
    $stmt->execute();

    $rezultat = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rezultat;
}


function get_email(object $pdo, string $email) {

    $connect = "SELECT email FROM korisnici WHERE email = :email";
    $stmt = $pdo->prepare($connect);
    $stmt ->bindParam(":email", $email);
    $stmt->execute();

    $rezultat = $stmt->fetch(PDO::FETCH_ASSOC);
    return $rezultat;
}

function set_user(object $pdo , string $pwd, string $username, string $email ) {
    $connect = "INSERT INTO korisnici(username,email,pass) VALUES (:username, :email, :pass);";
    $stmt = $pdo->prepare($connect);

    $opcije =[              //Ovo bih trebalo usporiti hakere koji pokušaju "Bruteforce" u stranicu
        'cost' => 12
    ];
    $hashedpassword =password_hash($pwd, PASSWORD_BCRYPT, $opcije);

    $stmt ->bindParam(":username", $username);
    $stmt ->bindParam(":email", $email);
    $stmt ->bindParam(":pass", $hashedpassword);
    $stmt->execute();

}