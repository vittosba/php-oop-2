<?php
// Descrizione
// Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Eseguire poi degli output istanziando oggetti delle varie classi.

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Products.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>SHOP</h1>
    </header>

    <main>
        <section class="products">
            <?php // istanza product
                $product1 = new Product('Latte', 101, 30, 1.5);
                var_dump($product1);
            ?>
            <h2><?php echo $product1->getSalable(); ?></h2>
        </section>

        <section class="users">
            <?php // istanza user
                $user1 = new User('Paolo', 'Duzioni', 30);
                var_dump($user1);
            ?>
            <h2><?php echo $user1->getFullName(); ?></h2>
            <div>User discount: <?php echo $user1->getSale(); ?>%</div>

            <?php // istanza premium user
                $user2 = new PremiumUser('Vittorio', 'Ipsum', 30);
                var_dump($user2);
            ?>
            <h2><?php echo $user2->getFullName(); ?></h2>
            <div>User discount: <?php echo $user2->getSale(); ?>%</div>
        </section>
    </main>
</body>
</html>