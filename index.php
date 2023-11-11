<!DOCTYPE html>
<html lang="en">
<head>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- header -->
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
        <div class="form">
            <form method="post">
                <div class="riga">
                <div class="input primo">
                <h2>~ Il tuo nome ~</h2>
                 <input type="text"> 
                </div>
                <div class="input primo">
                <h2>~ La tua Email ~</h2>
                <input type="email">
                </div>
                </div>
                <div id="rig"class="riga">
                <div class="input secondo">
                <h2>~ Seleziona la data ~</h2>
                <input type="date">
                </div>
                <div class="input secondo">
                <h2>~ Seleziona l'ora' ~</h2>
                <input type="time">
                </div>
                <div class="input secondo">
                <h2>~ In quanti siete? ~</h2>
                <select name="posti">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select> 
                 </div>
            </div>
          
                <h2>~ Altre Informazioni ~</h2>
                <input id="textArea" type="text">
                
                <input type="submit">
            </form>
        </div>
    
</div>
<!----------------------------- Prenotazione  ------------------------>
</body>  
<script src="script.js"></script>
</html>