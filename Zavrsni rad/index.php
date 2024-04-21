<?php 
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uvodna.css?v=<?php echo time(); ?>"> 
    <title>Web_Stranica</title>
</head>




<body>
<div id = "telo"> 
<header id="uvod" >  DOBRO DOŠLI  U  BELLISIMA ! </header>
    
        
        <h1 id ="login" >Login  </h1>  

        <form  id = "login1" action="includes/login.inc.php" method="post">                      
            <input type="text" name="username" placeholder="Korisničko ime"> <br>
            <input type ="password" name="pwd" placeholder="Lozinka"> <br>
            <button>Login</button> 
            
        </form>

        <?php
        provjera_login_error();
        ?>

        <br>
        
        <h2 id = "signup" > Sign up </h2>

        <form  id ="signup1" action="includes/signup.inc.php" method="post">
                    
            <input type="text" name="username" placeholder="Korisničko ime"> <br>          
            <input type="password" name="pwd" placeholder="Lozinka">   <br> 
            <input type="text" name="email" placeholder="E-Mail">   <br> 
            <button>Sign up</button>       

        </form>
       
        
    
       
    
    

    <?php 
    provjera_signup_error();   
    ?>





<br>
</div>
  
    
</body>
</html>
