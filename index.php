<?php
    $array = array();

    $array['12'] = ['posti'=> 2];
    $array['10'] = ['posti'=> 4];
    $array['8'] = ['posti'=> 6];
    $array['6'] = ['posti'=> 10];
    $array['4'] = ['posti'=> 14];
    $array['2'] = ['posti'=> 18];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- header -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il gusto del volo</title>
</head>
<body>
    <!-------------------------- hero --------------------------->
    <div id="hero" class="hero">
    <div class="header">
        <div class="nav">
            <ul>
                <li><a href="#Ristorante">Il Ristorante</a></li>
                <li class="second"><a href="#Menu">Il Menu</a></li>
            </ul>
        </div>
        <div class="logo">
            <img src="images/logo.png" alt="logo">
        </div>
        <div class="nav">
            <ul>
                <li><a href="#Map">Dove Siamo</a></li>
                <li class="second"><a href="#Book">Prenota</a></li>
            </ul>
        </div>
    </div>
</div>
<!----------------------------- ristorante  ------------------------>
<div id ="Ristorante"class="title">
<h1>~ Il Ristorante ~</h1>
</div>
<div id="uno" class="plane">
    <img src="images/plane.png" alt="image">
</div>
<div class="contenitore">
    <div class="minion">
        <div class="text">
            <p>
            Ampi spazi interni e arredamento rustico, insieme alla cordialità e alla disponibilità del personale, creano un'atmosfera intima e confortevole, perfetta sia per cene romantiche che pranzi in famiglia. La cucina propone piatti semplici e genuini, preparati con ingredienti freschi e di qualità, provenienti principalmente dal territorio circostante.
            </p>
        </div>
        <div class="image">
            <img src="images/vino.jpg" alt="image">
        </div>
        </div>
        <div class="minion">
         <div class="image">
            <img src="images/aereo.jpeg" alt="image">
        </div>
        <div class="text">
            <p>
                 Il menù è accompagnato da un'ottima selezione di vini locali, perfettamente in armonia con le portate proposte.

La Trattoria il Gusto del Volo è una vera e propria esperienza gourmet, da provare assolutamente se siete in zona. Veniteci a trovare e lasciatevi conquistare dai sapori e dalla genuinità delle nostre proposte culinarie. Vi aspettiamo!
            </p>
        </div>
    </div>
</div>
<div id="p1" class="parallax">
</div>
<!----------------------------- menu  ------------------------>
<div id ="Menu" class="title">
<h1>~ Il Menu ~</h1>
</div>
<div id="due" class="plane">
    <img src="images/plane.png" alt="image">
</div>
<div class="contenitore">
    <div class="card">
        <div id="ant" class="miniImg">
        </div>
        <div class="list">
            <div class="portata">
                <h1>~ Antipasti ~</h1>
            </div>
            <div class="elenco">
                <ul>
                    <li onClick="changeImg(1, 1)">Insalata di Culatello  <span>7.00€ </span></li>
                    <li onClick="changeImg(1, 2)">Sformatino di zucca <span>8.00€ </span></li>
                    <li onClick="changeImg(1, 3)">Selezione di formaggi trentini  <span>11.00€ </span></li>
                    <li onClick="changeImg(1, 4)">Tagliere di culatello  <span>13.00€ </span></li>
                    <li onClick="changeImg(1, 5)">Capelletti fritti  <span>8.00€ </span></li>
                    <li onClick="changeImg(1, 6)">Cestino di pinzini  <span>3.50€ </span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div id="primi" class="miniImg">
        </div>
        <div class="list">
        <div class="portata">
                <h1>~ Primi Piatti ~</h1>
            </div>
            <div class="elenco">
                <ul>
                    <li onClick="changeImg(2, 1)">Cappellacci di zucca <span>11.00€ </span></li>
                    <li onClick="changeImg(2, 2)">Capelletti al tartufo nero <span>15.00€ </span></li>
                    <li onClick="changeImg(2, 3)">Tagliatelle al tartufo nero  <span>13.00€ </span></li>
                    <li onClick="changeImg(2, 4)">Gnocchetti di pane  <span>10.00€ </span></li>
                    <li onClick="changeImg(2, 5)">Balanzoni verdi  <span>12.00€ </span></li>
                    <li onClick="changeImg(2, 6)">Tagliatelle alle castagne  <span>12.00€ </span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div id="secondi" class="miniImg">
        </div>
        <div class="list">
        <div class="portata">
                <h1>~ Secondi Piatti ~</h1>
            </div>
            <div class="elenco">
                <ul>
                    <li onClick="changeImg(3, 1)">Big cotoletta  <span>11.00€ </span></li>
                    <li onClick="changeImg(3, 2)">Tagliata di Angus <span>16.00€ </span></li>
                    <li onClick="changeImg(3, 3)">Filetto di maiale  <span>16.00€ </span></li>
                    <li onClick="changeImg(3, 4)">Arrosticini  <span>12.00€ </span></li>
                    <li onClick="changeImg(3, 5)">Porchetta alla contadina  <span>14.00€ </span></li>
                    <li onClick="changeImg(3, 6)">L'Arin il fumé primiero  <span>12.00€ </span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="p2" class="parallax">
</div>
<!----------------------------- Map  ------------------------>
<div id ="Map" class="title">
<h1>~ Dove Siamo  ~</h1>
</div>
<div id="tre" class="plane">
    <img src="images/plane.png" alt="image">
</div>
<div class="contenitore">
    <iframe id="mappa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.6363421267183!2d11.60770787590218!3d44.808599376942595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477e4fe323890939%3A0x54a08d73c0fb601d!2sTrattoria%20il%20Gusto%20del%20Volo!5e0!3m2!1sit!2sit!4v1699362092770!5m2!1sit!2sit" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div id="p3" class="parallax">
</div>
<!----------------------------- Prenotazione  ------------------------>

    <div id ="Book" class="title">
    <h1>~ Prenota  ~</h1>
    </div>
    <div id="due" class="plane">
        <img src="images/plane.png" alt="image">
    </div>
    <div id="last "class="contenitore">
        <div class="form" method="post">
            <form method="post">
                <div class="riga">
                <div class="input primo">
                <h2>~ Il tuo nome ~</h2>
                 <input name="name" type="text" required> 
                </div>
                <div class="input primo">
                <h2>~ La tua Email ~</h2>
                <input name="email" type="email" required>
                </div>
                </div>
                <div id="rig"class="riga">
                <div class="input secondo">
                <h2>~ Seleziona la data e l'ora~</h2>
                <input name="day" type="datetime-local" required>
                </div>
                <div class="input secondo">
                <h2>~ In quanti siete? ~</h2>
                <select id="posti" name="posti" method="post">
                    <option name="posti" value="2">tavolo da 2</option>
                    <option name="posti"value="4">tavolo da 4</option>
                    <option name="posti"value="6">tavolo da 6</option>
                    <option name="posti"value="8">tavolo da 8</option>
                    <option name="posti"value="10">tavolo da 10</option>
                    <option name="posti"value="10">tavolo da 12</option>
                </select> 
                 </div>
            </div>
          
                <h2>~ Altre Informazioni ~</h2>
                <textarea   rows="4" cols="50">
                </textArea> 
                <input name="submit" type="submit">
            </form>
        </div>

        <div id="tavoli">
            <div class="tavoli">
                <div class="imgt">
                <img src="images/tavolo.png">
            </div>
            <div class="scitte">
                <h5>Per 2 persone</h5>
                <h5><?php echo "Tavoli rimasti: ".$array[2]['posti'] ?></h5>
            </div>
            </div>
            <div class="tavoli">
                <div class="imgt">
                <img src="images/tavolo.png">
            </div>
            <div class="scitte">
                <h5>Per 4 persone</h5>
                <h5><?php echo "Tavoli rimasti: ".$array[4]['posti'] ?></h5>
            </div>
            </div><div class="tavoli">
                <div class="imgt">
                <img src="images/tavolo.png">
            </div>
            <div class="scitte">
                <h5>Per 6 persone</h5>
                <h5><?php echo "Tavoli rimasti: ".$array[6]['posti'] ?></h5>
            </div>
            </div><div class="tavoli">
                <div class="imgt">
                <img src="images/tavolo.png">
            </div>
            <div class="scitte">
                <h5>Per 8 persone</h5>
                <h5><?php echo "Tavoli rimasti: ".$array[8]['posti'] ?></h5>
            </div>
            </div><div class="tavoli">
                <div class="imgt">
                <img src="images/tavolo.png">
            </div>
            <div class="scitte">
                <h5>Per 10 persone</h5>
                <h5><?php echo "Tavoli rimasti: ".$array[10]['posti'] ?></h5>
            </div>
            </div><div class="tavoli">
                <div class="imgt">
                <img src="images/tavolo.png">
            </div>
            <div class="scitte">
                <h5>Per 12 persone</h5>
                <h5><?php echo "Tavoli rimasti: ".$array[12]['posti'] ?></h5>
            </div>
            </div>
        </div>
    
</div>
<!----------------------------- Footer  ------------------------>
<footer>
    <div id="detail">
        <div class="details">
                <h3> La Sede </h3>
                <h4>Via Mario Dotti, 44124 Ferrara FE</h4>
        </div>
        <div class="details">
        <h3> Gli Orari </h3>
        <h4>Mercoledì-Domenica <br> 12.00/14:30 - 19:30/22:30</h4>
        </div>
    </div>
    <div id="follow">
            <div id="copyright">
                 <span> Copyright © 2023 Bonaguro Cristian 5°G </span>
                 <h4>Telefono: 351 578 8011</h4>
            <a href="https://www.facebook.com/ilgustodelvolo/?locale=it_IT"><img src="images/facebook.png" alt="icon"></a>
               
            </div>
    </div>
</footer>
</body>  
<script src="script.js"></script>
</html>

<?php
    if (isset($_POST['submit'])) {
        mail($_POST['email'],'cricri@070605@gmail.com',"Egregio Signore/a ".$_POST['name']." la sua prenotazione per il giorno: ".$_POST['day']." per ".$_POST['posti']." persone è confermata");
      }
?>