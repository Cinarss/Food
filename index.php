<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/global.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
        <?php include "navbar.php"; ?>

        <div class="header-image">
            <div class="image-header-container">
                <div class="image"><img src="image/homeFood.jpg" alt=""></div>
            </div>
        </div>

        <div class="foods">

        
            <div class="foods-container">
                <ul>
                    <li>
                        <h3 class="title"> <a href="#">Et Yemeği </a></h3>
                        <div> <a href="#"> <img src="image/card.jpg" alt=""></a> </div>
                        <div class="footer">
                                <a>Tarih: 22/08/2022</a>
                                <a>Şef: Çınar Sak</a>
                        </div>
                    </li>
                </ul>
            </div>


            <?php 

                for ($i=0; $i < 10; $i++) { ?>
                    
                
                    <div class="foods-container">
                <ul>
                    <li>
                        <h3 class="title"> <a href="#">Et Yemeği </a></h3>
                        <div> <a href="#"> <img src="image/card.jpg" alt=""></a> </div>
                        <div class="footer">
                                <a>Tarih: 22/08/2022</a>
                                <a>Şef: Çınar Sak</a>
                        </div>
                    </li>
                </ul>
            </div>

            <?php }?>
            


        </div>

        


</body>
</html>