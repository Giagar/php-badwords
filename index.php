<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        // creare una var con paragrafo di testo
        $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias quasi cum autem delectus porro nemo blanditiis consequatur facilis eligendi amet nam, in necessitatibus exercitationem hic ullam dolorum cumque tempore laboriosam.";

        // scrivere a schermo lunghezza paragrafo
        $textLength = strlen($text);

        // replace badword a scelta passata tramite $_GET con ***
        $badWord  = $_GET["badword"];
        $censoredText = str_replace($badWord, "***", $text);
    ?>

    <header>
        <h1>Esercizio PHP Badword</h1>
    </header>
    <main>
        <section>
            <h2>Consegna n. 1</h2>
            <p class="description">Scrivere a schermo la lunghezza del paragrafo creato in php</p>
            <p class="solution">
                <mark><?php echo $textLength ?></mark> 
            </p>
        </section>

        <section>
            <h2>Consegna n. 2</h2>
            <p class="description">Visualizzare a schermo il paragrafo creato in php dopo aver sostituito la badword tramite get (badword=sit)</p>
            <p class="solution">
                <mark><?php echo $censoredText ?></mark>
            </p>
        </section>
    </main>
    
</body>
</html>