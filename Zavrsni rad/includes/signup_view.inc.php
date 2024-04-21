<?php

function provjera_signup_error() {
    if (isset($_SESSION['msg_error'])) {
        $errors = $_SESSION['msg_error'];

        

        foreach ($errors as $error) {
            echo '<h2 style="text-align: center;  color:aquamarine;">' . $error . '</h2>';
            
        }
        
        

        unset($_SESSION['msg_error']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "uspijesan") {
        echo '<br>';
        echo '<h2 style="text-align: center;  color:aquamarine;">Uspjesno ste se prijavili!</h2>';
        
    }
}