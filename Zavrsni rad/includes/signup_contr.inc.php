<?php

function prazna_mjesta(string $username, string $pwd, string $email) {
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    }
    else{
        return false;
    }

}

function pravi_email( string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }

}

function koristeno_korisnicko_ime( object $pdo , string $username) {
    if (get_korisnicko_ime($pdo,$username) ) {
        return true;
    } else {
        return false;
    }

}

function registriran_email( object $pdo , string $email) {
    if (get_email($pdo,$email)) {
        return true;
    } else {
        return false;
    }
}

function stvori_korisnika(object $pdo , string $pwd, string $username, string $email ) {
    
    set_user($pdo, $pwd, $username,$email);
}