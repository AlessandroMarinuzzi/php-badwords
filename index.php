<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET. 
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    $track = "Crown";

    $artist = "Mezzosangue";

    $album = "Tree";

    $verse = "
    Scrivere rime per vivere
    Scriverle fino a morire
    Descrivere immagini libere o frasi di stile
    Poi scrivere la gente, poi starci le notti a capire
    Le rime, lo stile, il concetto complesso da dire
    Sentire quel senso di perdersi in mezzo alla musica, l'unica
    Senza pensare che un pubblico giudica
    Uscire dal foglio che suda, per tornare dentro
    L'amplesso disperso nel corso del tempo che muta
    Nel battere un ferro che brucia col sangue che sputa
    E che uccide chi aiuta, poi scruta
    Io muovo ogni filo del mio burattino con dei movimenti sottili
    Ma il mio è un burattino che sa chi lo guida
    È lui stesso che taglia i suoi fili
    È la statua che eretta per foga e lasciata a quel guano che indossa
    Una corsa da fermo, una croce per terra
    Una morsa, un abbraccio, una toppa, uno strappo, un violento silenzio
    Una voce, una foce, una soglia, una luce
    Una luna, una voglia, una forma, un bisogno
    Una donna, un orgoglio, una storta, un tramonto
    Una spiaggia, una sorte che scrivo, un destino che vivo
    Una strada che parte da qui
    Tree";

    $censored_word = $_GET["censored_word"];

    $censored_verse = str_replace($censored_word, "***", $verse);

    // echo "<p>" . $censored_paragraph . "</p>";

    // echo "<div>The paragraph has " . strlen($censored_paragraph) . " characters</div>";
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strofa tratta del singolo <?= $track;?> di <?= $artist;?>, dall'album <?= $album;?>: </h1>
    <p><?php echo $censored_verse; ?></p>
    <span>The paragraph has <?php echo strlen($censored_verse); ?> characters.</span>
</body>
</html>