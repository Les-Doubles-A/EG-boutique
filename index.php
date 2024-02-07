<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique Minecraft</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="minecraft-title">Boutique Minecraft</h1>
        <h2 class="minecraft-title">EG-Land</h2>
    </header>

    <section class="products">
        <div class="product">
            <img src="steack.png" alt="steack.png">
            <h2>Steack X2</h2>
            <?php
            require 'steack.php';
            echo "$steack_rest encore en vente";
            ?>
            <p class="product-price">Prix : 1 fer</p>
            <a href="steack-achat.php" class="add-to-cart">Commandez</a>
        </div>
        <!-- Ajoutez d'autres produits ici -->

        <div class="product">
            <img src="cuire.png" alt="cuire.png">
            <h2>Cuire X5</h2>
            <p class="product-price">Prix : 2 fers</p>
            <a href="tkt.php" class="add-to-cart">Commandez</a>
        </div>
        

    </section>

    <footer>
    </footer>
</body>

</html>