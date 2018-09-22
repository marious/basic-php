<?php date_default_timezone_set('Asia/Riyadh'); ?>
<?php
    // create short variable names
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];

    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;
    $totalamount = 0;

    define('TIREPRICE' ,100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $totalamount = $tireqty * TIREPRICE
                    + $oilqty * OILPRICE
                    + $sparkqty * SPARKPRICE;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
    <h1>Bob's Auto Parts - Order Results</h1>
    <h2>Order Results</h2>
    <?php
       echo '<p>Order processed at ' . date('H:i, jS F Y') . '</p>';
       echo '<p>Your order is as follows: </p>';
       echo '<p>Items ordered: ' . $totalqty . ' <br>';
       echo 'Subtotal: $' . number_format($totalamount, 2) . '<br>';

        $taxreate = 0.10; // locale tax is 10%;
        $totalamount = $totalamount * (1 + $taxreate);
        echo 'Total including tax: $' . number_format($totalamount, 2) . '</p>';
    ?>
</body>
</html>