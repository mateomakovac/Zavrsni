<?php

declare(strict_types=1);

function prazna_mjesta(string $username, string $pwd) 
{
    if (empty($username) ||empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function jeli_korisnicko_ime_krivo(bool|array $rezultat) 
{   
    if (!$rezultat) {
        return true;
    } else {
        return false;
    }
}

function jeli_password_kriv(string $pwd, string $hashedpassword) 
{
    if (!password_verify($pwd,$hashedpassword)) {
        return true;
    } else {
        return false;
    }
}
