    $car1 = new Car("Honda Civic", 2000, 1980, "img/honda.jpg", 12345);
    $car2 = new Car("Volks Beetle", 1000, 1980, "img/bug.jpg", 5456);
    $cars=array($car1, $car2);
    $cars_matching = array();


    $max_price = $_GET["max_price"];
    $max_mileage = $_GET["max_mileage"];
    foreach ($cars as $car)
    {
        if ($car->getPrice() < $max_price)
        {
            if ($car->getMileage() < $max_mileage)
            {
                array_push($cars_matching, $car);
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Objects</title>
</head>
    <body>
        <h1>Objects</h1>
        <?php
            echo "<ul>";
            if(empty($cars_matching)) {
                echo "This array is empty";
            }
            else {
                foreach($cars_matching as $car)
                {
                    echo "<li>" . $car->getMake() . "</li>";
                    echo "<li>" . $car->getPrice() . "</li>";
                    echo "<img src=" . $car->getImg() . "/>";
                }
            echo "</ul>";
                }
        ?>



    </body>
</html>
