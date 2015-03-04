<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/car.php';

    $app = new Silex\Application();

    $app->get("/home", function() {
        return

        "<!DOCTYPE html>
        <html>
        <head>
            <title>Car Form</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min/css'>
        </head>
        <body>
            <div class = 'container'>
                <form action = '/car_search_results'>
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




    $app->get('/car_search_results', function() {

        $car1 = new Car("Honda Civic", 2000, 1980, "img/honda.jpg", 12345);
        $car2 = new Car("Volks Beetle", 1000, 1980, "img/bug.jpg", 5456);
        $cars=array($car1, $car2);
        $cars_matching = array();

        $max_price = $_GET["max_price"];
        $max_mileage = $_GET["max_mileage"];

        foreach ($cars as $car) {
            if ($car->getPrice() < $max_price)
            {
                if($car->getMileage() < $max_mileage)
                {
                    array_push($cars_matching, $car);
                }
            }
        }

            $output = "";
            if(empty($cars_matching)) {
                return "Sorry, no cars matched your criteria.";
            }
            else {
                foreach($cars_matching as $car)
                {
                    $output = $output . "<ul>" .
                     "<li>" . $car->getMake() . "</li>
                    <li>" . $car->getPrice() . "</li>
                    <img src=" . $car->getImg() . "></ul>";
                }
            }

                return $output;

            });
        return $app;

    ?>
