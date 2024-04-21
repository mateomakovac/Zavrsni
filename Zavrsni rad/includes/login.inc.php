
<?php 



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];


    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        

        $error = [];
        if (prazna_mjesta($username,$pwd)) {   
            $error["prazna_mjesta"] = "Molimo Vas ispunite sva polja!";         
        }

        $doprinos = get_user($pdo, $username); //uzima podatke iz baze podataka da bih ispunio funkciju
        
        if (jeli_korisnicko_ime_krivo($doprinos)) {   
            $error["krivi_login"] = "Krivi ste upisali podatke!";         
        }
        if (!jeli_korisnicko_ime_krivo($doprinos) && jeli_password_kriv($pwd , $doprinos["pass"])) {
            $error["krivi_login"] = "Krivi ste upisali podatke!";
        }

        require_once 'config_session.inc.php';


      if ($error) {
        $_SESSION["login_error"] = $error;
        header("Location: ../index.php");
        die();
      }

      
      $newSessionId = session_create_id();
      $sessionId = $newSessionId . "_" . $doprinos["id"]; // ovo je za kreiranje novog id za spesifičnog korisnika(za bolju sigurnost)
      session_id($sessionId); 

      $_SESSION["korisnik_id"] = $doprinos["id"];
      $_SESSION["korisnik_username"] = $doprinos["username"];

      $_SESSION["last_regeneration"] = time();

      header("Location: ../index.php?login=uspjeh");
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
