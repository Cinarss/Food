<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/global.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include "navbar.php" ?>
    
    <h1 class="categories">Categories</h1>

    <div class="foods-rate">
    <?php
    for ($i=0; $i <10 ; $i++) { ?>
        
            <div class="foods-rate-container">
                <a href=""><h2 class="foods-rate-title">Et Yemeği</h2></a>
                <div class="foods-rate-image"><a href=""> <img src="image/card.jpg" alt=""></a></div>

            </div>
        
    
    
    <?php }?>
    </div>
</body>
</html>