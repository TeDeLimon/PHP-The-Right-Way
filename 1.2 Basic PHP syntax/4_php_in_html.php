<!DOCTYPE html>
<html>

<head>
    <title>PHP in HTML</title>
</head>

<body>
    <
        <h1>Welcome to my website</h1>
        <p>Today's date is: <?php echo date('d-m-Y'); ?></p>
        <p>The current time is: <?= date('H:i:s'); ?></p> <!-- This is a shorthand for < ?php echo ... ?> -->
        <?php
        $greeting = "Have a great day!";
        ?>
        <p><?= $greeting; ?></p>

        <?php
        $x = 10;
        $y = 20;
        // You can also include PHP code to perform calculations and output results
        echo '<p>The sum of ' . $x . ' and ' . $y . ' is: ' . ($x + $y) . '</p>';
        ?>
</body>

</html>