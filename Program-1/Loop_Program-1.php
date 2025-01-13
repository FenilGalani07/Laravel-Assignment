<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $number = isset($_POST['number']) ? intval($_POST['number']) : 0;
                    echo "<h2>Multiplication Table for $number</h2>";
                    echo "<table border='1' cellpadding='5'>";
                    echo "<tr><th>Number</th><th>Multiplier</th><th>Result</th></tr>";
                   
                    for ($i = 1; $i <= 10; $i++) {
                        $result = $number * $i;
                        echo "<tr><td>$number</td><td>$i</td><td>$result</td></tr>";
                    }
                   
                    echo "</table>";
                } else {
                   
                    echo '<form method="post" action="">
                            <label for="number">Enter a number:</label>
                            <input type="number" id="number" name="number" required>
                            <input type="submit" value="Generate Table">
                        </form>';
                }
            ?>
</body>
</html>
