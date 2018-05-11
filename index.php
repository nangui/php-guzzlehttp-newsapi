<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

        <title>Document</title>
    </head>
    <body>
        <?php include_once 'config.php'; ?>
        <?php include_once 'header.php'; ?>
        <div class="container">
            <div class="row">
                <?php
                    foreach ($articles as $article) 
                    {
                ?>
                        
                    <div class="col-md-4 mt-2">
                        <!-- Card -->
                        <div class="card">
                            <!-- Card image -->
                            <img class="card-img-top" src="<?php echo $article['urlToImage'] ?>" alt="Card image cap">
                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Title -->
                                <h4 class="card-title">
                                    <a>
                                        <?php echo $article['title'] ?>
                                    </a>
                                </h4>
                                <!-- Text -->
                                <p class="card-text">
                                    <?php echo $article['description'] ?>
                                </p>
                                <!-- Button -->
                                <a href="#" class="btn btn-primary">Lire la suite ...</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>

                <?php 
                    }
                ?>
            </div>    
        </div>

        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
                    
    </body>
</html>