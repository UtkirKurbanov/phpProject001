<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Project001</title>
</head>
<body>
    <?php require "blocks/header.php" // header'imizni require orqali index.php'ga chaqirib oldik?> 
    <div class="container mt-5">
        <h3 class="mb-5">Our articles</h3>

        <div class="d-flex flex-wrap">
            <?php
            //for siklidan foydalangan holda card'arni ekranga chiqarishni birinchi usuli
            /*
                for ($i=0; $i < 5; $i++) 
                
                    echo    '<div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Free</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                                    <ul class="list-unstyled mt-3 mb-4">
                                        <li>10 users included</li>
                                        <li>2 GB of storage</li>
                                        <li>Email support</li>
                                        <li>Help center access</li>
                                    </ul>
                                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                                </div>
                            </div>';
            */
        
                //for siklidan foydalangan holda card'arni ekranga chiqarishni ikkinchi usuli

                for ($i=0; $i < 5; $i++): //figurali qavsni urniga ":"-ikki nuqta ishlatgan holda sikldan foydalanamiz, sikl ochildi ya'ni ishga tushdi
            ?>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Text</h4>
                </div>
                <div class="card-body">
                    <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">More Info</button>
                </div>
            </div>
            <?php endfor; // sikl tugadi?> 
        </div>        
    </div>
    
    <?php require "blocks/footer.php" // header'imizni require orqali footer.php'ga chaqirib oldik?>
</body>
</html>