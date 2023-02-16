
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <link rel="stylesheet" href="../ressources/css/normalize.css">
</head>
<body>
    <section class="contact" id="contact">
        <div class="titre noir">
            <h2 class="titre-text" id="color"><span>C</span>ontact</h2>
        </div>
        <div class="contactform">
            <form action="RequestHandler/contactUs" method="POST">
            <h3>Envoyer un message</h3>
            <input type="text" placeholder="Nom" class="inputboite" name="user_name">
            <input type="text" placeholder="email" class="inputboite" name="user_email">
            <textarea placeholder="message" class="inputboite" cols="300" rows="10" name="user_text" ></textarea>
            <input type="submit" value="envoyer" name="envoyer" class="inputboite">
            </form>
        </div>
    </section>


    <?php
            require "../App/views/components/footer.php"
        ?>

</body>
</html>