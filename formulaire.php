<!doctype html>
<html lang=zxx>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="formulaire.css">
        <title> Bulko </title>
    </head>
    
    <body>
        <header>
            <a href="www.bulko.net" class="logo"><img src="logoBulko.png"></a>
            <h1> CONTACT </h1>
            <a href="#" class="rs"><img src="reseauxSociaux.png"></a>
        </header>
        <div class="main">
            <h2>CONTACT</h2>
            <form method="post" action="donnees.php">
                <div class="input">
                    <div class="gauche">
                        <input type="text" name="nom" placeholder="Nom" class="form">
                        <input type="email" name="mail" placeholder="Mail" class="form" required>
                        <input type="tel" name="tel" placeholder="Téléphone" class="form" required >
                    </div>
                    <div>
                        <textarea type="text" name="message" placeholder="Message" class="msg" rows="4" cols="4"></textarea>
                    </div>
                </div>
                <input type="submit" value="" class="button">
            </form>
        </div>
    </body>
</html>