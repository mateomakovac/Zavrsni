<?php   require_once 'includes/login_view.inc.php';
        require_once 'includes/config_session.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Stranica.css?v=<?php echo time(); ?>"> 
    <title>Pozdrav</title>
</head>

<body>
    <div id="crnac">

    <div id="uff"> 
     <header style="color:pink; font-size:350%; font-family:system-ui;">  Dobrodošli <?php  output_username() ?>  </header>

    <form  action="includes/logout.inc.php" method="post">  
    <h2 style="font-family:system-ui; color:pink;"> Kliknite da bih ste se odlogirali! </h2>  
    <button class="gumb" >Logout</button> 
    </form>
    </div>   

    </div>

    
    <section>  
    <div class="slike">
   <img src="css\Bellissima nokti 3.jpg" width="500" height="500"> <pre class="dobrodošlica"> Dobrodošli u Bellissima, oazu ljepote i opuštanja gdje se susreću vrhunska stručnost i osobni pristup njezi. 
    Bellissima nije samo kozmetički obrt - to je iskustvo koje transformira vašu percepciju ljepote i osnažuje vaše samopouzdanje. <br> 
    U Bellissimi, svaki klijent je jedinstvena priča, a naša strast je stvaranje individualnih rješenja koja ističu vašu prirodnu ljepotu. 
    Naš tim stručnjaka u području ljepote predano radi kako bi svaki tretman bio personaliziran prema vašim potrebama i željama </pre> 
                  
    
    </div>
    
    <div class="slike">
    <img src="css\Bellissima nokti 4.jpg" width="500" height="500" >  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2810.725415847669!2d13.719341112242184!3d45.21289165005018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477cbda7511a129f%3A0xa27017ce4ca9a6e6!2sBellissima%20obrt%20za%20uljep%C5%A1avanje!5e0!3m2!1shr!2shr!4v1713632217423!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe> <p class="dobrodošlica">Ovdje nas možete naći na karti!</p>
    </div>

    <div class="slike">
    <img src="css\Bellissima nokti 5.jpg" width="500" height="500" > <ul class="dobrodošlica"> Naše Radno Vrijeme    
        <li> Ponedeljak,Srijeda,Četvrtak  13:00 - 20:00h</li>
        <li> Utorak i Petak  10:00 - 17:00h</li>
        <li> Subota  9:00 - 14:00h </li>
        <li> Nedelja i Praznici - ZATVORENO - </li>
    </ul> 
    


    </div>
    
    </section>



    <footer id="kraj">
        <h1 class="dobrodošlica" style="margin-top:0px;"> ŽELITE SE NARUČITI? </h1>       
        <form  action="https://form.jotform.com/240995642440359" method="post">   
        <button id="gumb2" > NARUČITE SE</button> 
        </form>      
        
        <h3> ILI NAS KONTAKTIRAJTE </h3>
        <a href="https://www.instagram.com/beauty_nails_bellissima/"> Instagram </a> <br>
        <a href="https://m.facebook.com/people/Bellissima-obrt-za-uljep%C5%A1avanje/100073429871035/"> Facebook </a>
        <p>Broj mobitela: 091 567 8742 </p>
    </footer>





    
</body>
</html>

