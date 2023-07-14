<?php 
include_once __DIR__ . "/database/db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
    <link rel="stylesheet" href="./styles/secondaryStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid d-flex flex-wrap justify-content-between p-3">
    
        <?php foreach ($items as $item){
            if($item->category === "Cani"){?>
          
                <div class="card mb-3 d-flex flex-column justify-content-between">
                    <h2 class="title"><?php echo $item->title; ?></h2>
                    <div class="img-container">
                        <img src="<?php echo $item->image ?>" alt="<?php echo $item->title ?>">
                    </div>
                    <div class="info">
                        <p class="desc"><?php echo $item->description ?></p>
                        <p>Prezzo: <?php  echo number_format( $item->price, 2);  ?> &euro;</p>
                        <p>Sezione: <?php echo $item->type ?></p>
                    </div>
                </div>
            
            <?php } } ?>
         
       
    </div>
</body>
</html>