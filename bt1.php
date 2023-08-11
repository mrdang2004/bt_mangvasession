<!DOCTYPE html>
<html lang="en">
<?php
include 'data.php';

if (isset($_POST['submit'])) {
    $new_product = array(
        "img" => $_POST['img'],
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "star" => $_POST['star'],
        "evaluate" => $_POST['evaluate']
    );

    array_push($products, $new_product);
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPhone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
echo "<form method='post'>";
echo "<label for='img'>Image URL:</label><br>";
echo "<input type='text' id='img' name='img'><br>";
echo "<label for='name'>Name:</label><br>";
echo "<input type='text' id='name' name='name'><br>";
echo "<label for='price'>Price:</label><br>";
echo "<input type='text' id='price' name='price'><br>";
echo "<label for='star'>Star:</label><br>";
echo "<input type='text' id='star' name='star'><br>";
echo "<label for='evaluate'>Evaluate:</label><br>";
echo "<input type='text' id='evaluate' name='evaluate'><br><br>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";

foreach ($products as $product) {
    echo "<div class='product'>";
    echo "<img src='" . $product['img'] . "' alt='" . $product['name'] . "' />";
    echo "<h2>" . $product['name'] . "</h2>";
    echo "<p>Price: " . $product['price'] . "</p>";
    echo "<p>Star: " . $product['star'] . "</p>";
    echo "<p>Evaluate: " . $product['evaluate'] . "</p>";
    echo "</div>";
}
?>
</body>
</html>