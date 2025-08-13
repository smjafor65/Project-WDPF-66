<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Checker</title>
</head>
<body>
    <form action="" method="GET">
        <label for="">Number:</label>
        <input type="number" name="number"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $number = $_GET['number'];
        primeNumber($number);
    }

    function primeNumber($number) {
        if ($number < 2) {
            echo "<h1>$number is not a prime number</h1>";
            return;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                echo "<h1>$number is not a prime number</h1>";
                return;
            }
        }
        echo "<h1>$number is a prime number</h1>";
    }
    ?>
</body>
</html>
