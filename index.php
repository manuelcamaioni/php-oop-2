<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Animal Shop</title>
</head>
<body>
    <header>
        <h1 class="m-0 text-center">Pet Shop</h1>
    </header>
    <main class="d-flex">
        <div class="dogs w-50 position-relative">
            <form action="./dogs-products.php" method="post" class="w-100 h-100">
                <button type="submit" class="w-100 h-100">Clicca</button>
            </form>
            <h1 class="title text-white position-absolute">Prodotti per cani</h1>
        </div>
        <div class="cats w-50 position-relative">
        <form action="./cats-products.php" method="post" class="w-100 h-100">
                <button type="submit" class="w-100 h-100">Clicca</button>
            </form>
            <h1 class="title text-white position-absolute">Prodotti per gatti</h1>
        </div>
    </main>
</body>
</html>