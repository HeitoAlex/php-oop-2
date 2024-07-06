<?php 

require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fontawesome 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row">
            <h1 class="mb-5">
                Boolshop
            </h1>
            <h2 class="mb-3">
                I nostri prodotti
            </h2>
        </div>
        <div class="row">
            <?php foreach($products as $product) {?>
                <article class="col-4">
                    <div class="card mb-3">
                        <img src="<?php echo $product->getImage()?>" class="card-img-top" alt="articolo in vendita">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product->getTitle()?></h3>
                            <span><?php echo $product->getCategory()->getIcon()?></span>
                            <span><?php echo $product->getCategory()->getName()?></span>
                            <p class="card-text"> Prezzo: &euro; <?php echo $product->getPrice()?></p>
                            <?php if(get_class($product) === "Food") {?>
                                <p> Peso netto: <?php echo $product->getWeight()?>g </p>
                                <p> Ingredienti: <?php echo $product->getIngredients()?></p>
                            <?php } elseif (get_class($product) === "Accessory") {?>
                                <p> Materiale: <?php echo $product->getMaterials()?></p>
                                <p> Dimensioni: <?php echo $product->getDimensions()?></p>
                            <?php } elseif (get_class($product) === "Toy") {?>
                                <p> Caratteristiche: <?php echo $product->getCharacteristics()?></p>
                                <p> Dimensioni: <?php echo $product->getDimensions()?></p>
                            <?php }?>
                        </div>
                    </div>
                </article>
            <?php }?>
        </div> 
    </main>
</body>
</html>