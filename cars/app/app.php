<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/car.php';

    $app = new Silex\Application();

    $app->get("/app", function() {
        return

        "<!DOCTYPE html>
        <html>
        <head>
            <title>Car Form</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min/css'>
        </head>
        <body>
            <div class = 'container'>
                <form action = 'car.php'>
                    <div class = 'form-group'>
                        <label for = 'max_mileage'>Enter the max_mileage</label>
                        <input id ='max_mileage' name ='max_mileage' class='form-control' type='number'>
                    </div>
                    <div class = 'form-group'>
                        <label for = 'max_price'>Enter your max max_price</label>
                        <input id ='max_price' name ='max_price' class='form-control' type='number'>
                    </div>
                    <button type='submit' class='btn'>Go!</button>
                </form>
            </div>
        </body>
        </html>";
    });
        return $app;

    $app->get("/car_search", function() {
        $new_car = new Car($_GET['max_price'], $_GET['max_mileage']);
        
    })

    ?>
