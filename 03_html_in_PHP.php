<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HYML dans le PHP</title>
</head>
<body>
    <h1>Les Balises HTLM dans le PHP</h1>

    <!-- Du PHP dans les balises HTML -->

    <!-- Balise simple du HTML -->
    <p style="color:blue">
        Le texte apparaît en bleu
    </p>

    <!-- Du PHP dans une balise HTML -->
    <p <?php echo 'style="color:red"' ?>>
        Le texte est en rouge
        avec du PHP à l'intérieur
    </p>

    <!-- HTML dans le PHP : méthode largement utilisée -->
    <?php echo "<div>"?>
        <h1>Les Balises HTLM dans le PHP</h1>
        <h1>Les Balises HTLM dans le PHP</h1>
        <h1>Les Balises HTLM dans le PHP</h1>
        <h1>Les Balises HTLM dans le PHP</h1>
    <?php echo "</div>"?>

    <!-- Cette méthode serait lrgement utilisé d'après la vidéo.
         Dans les projets que je compte faire, 
         je vais sans doute utiliser cette méthode.-->

</body>
</html>