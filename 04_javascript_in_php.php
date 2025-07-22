<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Du Javascript dans du PHP</title>
</head>
<body>
    
<script>
    // alert("hello")
    <?php echo 'alert("hello")'; ?> // Ne oublier de fermer la déclaration avec les guillemets

    // Message de confirmation qui apparaîtra juste après le message d'aletre. Ce message dira au cilent s'il est sûr de supprimer le produit en question
    <?php echo 'confirm("Êtes-vous sûr que vous voulez supprimer ce produit ?")'; ?> 
</script>

</body>
</html>