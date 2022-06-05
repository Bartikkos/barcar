<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bartosz Kościański">
    <title>Kontakt</title>
    <link href="/style/form.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/img_main/logo.png" sizes="96x96" />
</head>
<body>
    <header>
        <div class="logo">
            <a href="/index.html"><img src="/img_main/barcar.png" alt="logo"></a>
        </div>
        <nav>
            <form action="/html/oferta.html"><button type="submit">OFERTA</button></form>
            <form action="/html/flota.html"><button type="submit">FLOTA</button></form>
            <form action="/html/onas.html"><button type="submit">O FIRMIE</button></form>
            <form action="/html/kontakt.html"><button type="submit">KONTAKT</button></form>
        </nav>
    </header>
    <section>
        <article class="cofnij">
            <div>
                <a href="/index.html">POWRÓT DO STRONY GŁÓWNEJ</a>
            </div>
        </article>
        <article class="form">
            <div class="php">
            <?php
                if(isset($_POST['email']) && isset($_POST['imie']) && isset($_POST['mess']))
                {
                    echo "<h1>Twoja wiadomość:</h1>";
                    $email=$_POST['email'];
                    $imie=$_POST['imie'];
                    $mess=$_POST['mess'];
                    echo "<ul><li>Adres email: $email</li>";
                    echo "<li>Imię: $imie</li>";
                    echo "<li>Wiadomość: $mess</li></ul>";
                    echo "<h1>została pomyślnie wysłana. Nasz konsultant skontaktuje się z Tobą w ciągu 48h. Dziękujemy za skorzystanie z naszych usług.</h1>";
                }
            ?>
            </div>
        </article>
    </section>
    <footer>
        <div class="info">
            <h2>Najważniejsze informacje:</h2>
            <p>&#9743;&nbsp;<a href="tel:+48692137420">+48 692 137 420</a></p>
            <p>&#x2709;&nbsp;<a href="mailto:kontakt@barcar.pl">kontakt@barcar.pl</a></p>
            <p>&#128368;&nbsp;Godziny pracy</p>
            <div class="godz">
                <p>pon. 7:00 - 23:00</p>
                <p>wt. 7:00 - 23:00</p>
                <p>śr. 7:00 - 23:00</p>
                <p>czw. 7:00 - 23:00</p>
                <p>pt. 7:00 - 23:00</p>
                <p>sob. 7:00 - 23:00</p> 
                <p>nd. 7:00 - 23:00</p> 
            </div>
        </div>
        <div class="linki">
            <h2>Przydatne linki</h2>
            <p><a href="/html/onas.html">O nas</a></p>
            <p><a href="/Regulamin.pdf">Regulamin</a></p>
            <p><a href="/html/faq.html">FAQ</a></p>
        </div>
        <p id="prawa">©2022 BarCar Sp. z o. o. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>