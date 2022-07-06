<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delish2Go</title>
        <link rel="stylesheet" type="text/css" href="stilovi.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <p style="color:rgb(205, 10, 10); font-size: 1.3em;"> <img src="Images/logo.png" width="60" height="50" alt="Delish2Go"><em><b> Delish2Go</b> </em> </p> 
            <nav>
                <ul>
                <li> <a href="pocetna.html" >Почетна</a></li>
                <li> <a href="">Мени</a></li>
                <li> <a href="">Нарачка</a></li>
                <li> <a href="" class="active">Ресторани</a></li>
                <li> <a href="kontakt.html" >Контакт</a></li>
                <li> <a href="">Најава</a></li>
                </ul>
            </nav>
             </header>
             <br>
             <p style="font-family: Georgia, serif; font-size:3em;text-align: center;"><img src="Images/dzvezda.png"><b>РЕСТОРАНИ</b><img src="Images/dzvezda.png"></p>
             <br>
             <?php foreach ($restorani as $restoran) : ?>
            <div class="wrapper">
            <img src="Images/background2.jpg" style='height: 100%; width: 100%; object-fit: contain' alt="Delish2Go" >
            <h1 class="center"><?php echo $restoran->getIme(); ?></h1>
            <p class="center">Работно време: <?php echo $restoran->getRabotnoVreme(); ?></p>
             </div>
             <br>
            
        <?php endforeach; ?>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                
    <footer style="background-color: rgb(255, 243, 243);">
        <p class="center">&copy Delish2Go, 2022</p>
        <img src="Images/logo.png" width="60" height="50" alt="Delish2Go" class="centerPic">
    </footer>
    </body>
</html>