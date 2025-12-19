 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    



 <h1> exercice 1</h1>
<?php 

    // if(isset($_GET["ville"]) && isset($_GET["transport"])) {
    // echo "La ville choisie est ". $_GET["ville"]." et le voyage se fera en  ". $_GET["transport"];
    // }         
 ?>


 <h1> exercice 2</h1>

      <form action="index.php" method="GET">
        <label for="animal">Votre animal préféré</label>
        <input type="text" id="animal" name="animal">
        <input type="submit">
    </form>
    <?php 
        if(isset($_GET["animal"])) {
            $animal = $_GET['animal'];
    ?>
    <p>Votre animal choisi est <?php echo $animal; ?></p>
    <?php } ?>

 <h1> exercice 3</h1>

<form method="POST">
    <input type="text" name="pseudo" placeholder="Pseudo">
    <select name="couleur">
        <option value="red">Rouge</option>
        <option value="blue">Bleu</option>
        <option value="green">Vert</option>
        <option value="white">Blanc</option>
    </select>
    <button type="submit">Envoyer</button>
</form>

<?php
$pseudo = $_POST['pseudo'] ?? '';
$couleur = $_POST['couleur'] ?? '';

echo "<style>body { background-color: " . htmlspecialchars($couleur) . "; }</style>";
echo "<p>Bienvenue " . htmlspecialchars($pseudo) . "</p>";

?>
    <h1>exercice 4</h1>
    <form action="exo4.php" method="POST">
        <input type="number" name="number" id="number">
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['number'])) {
        if ($_POST['number'] % 6 === 0) {
            echo rand(1, $_POST['number']);
        } else {
            header('Location: ');
            exit();
        }
    }

    if (isset($_GET['error'])) {
        if ($_GET['error'] === "true") {
            echo "<p>le nombre n'est pas valide</p>";
        }
    }
    ?>





    <h1>Exo 5</h1>

  </body>
 </html>