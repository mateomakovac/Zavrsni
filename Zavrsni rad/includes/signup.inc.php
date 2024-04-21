<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];


    try {

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_view.inc.php';
        require_once 'signup_contr.inc.php';


        $error = [];
        if (prazna_mjesta($username,$pwd,$email)) {   
            $error["prazna_mjesta"] = "Molimo Vas ispunite sva polja!";         
        }

        if (pravi_email($email)) { 
            $error["pravi_email"] = "Neispravana email adresa!";           
        }

        if (koristeno_korisnicko_ime($pdo,$username)) { 
            $error["korisnicko_ime"] = "Korisnicko ime se vec koristi!";           
        }

        if (registriran_email($pdo,$email)) {  
            $error["registriran_email"] = "Email je vec registriran!";          
        }

        require_once 'config_session.inc.php';


      if ($error) {
        $_SESSION["msg_error"] = $error;
        header("Location: ../index.php");
        die();
      }

      stvori_korisnika( $pdo , $pwd, $username, $email);

      header("Location: ../index.php?signup=uspijesan");
      $pdo = NULL;
      $stmt = NULL;
      die();



    } catch (PDOExeption $e) {
        die("Error : " . $e->getMessage());
    }




} else {
    header("Location: ../index.php"); // Vraća korisnike natrag u slućaju da su došli neligitmno
    die();
} 