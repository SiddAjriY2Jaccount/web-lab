<html>
    <head>
        <title>
            "PHP calculator"
        </title>
    </head>
    <body>
        <form action="8a0.php" method="POST">

                        <h2>Enter 1st number</h2>
                        <br>
                        <input type="text" name="num1">
                        <h2>Enter 2nd number</h2>
                        <input type="text" name="num2">
                            <select name="op">
                                <option>Choose an operation</option>
                                <option value="+">Addition</option>
                                <option value="-">Subtraction</option>
                                <option value="*">Multiplication</option>
                                <option value="/">Division</option>
                                <option value="%">Modulus</option>
                            </select>
                            <input type="submit" name="pop" value="Perform operation">
        </form>

        <?php
            if(isset($_POST['pop'])) {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $op = $_POST["op"];
                $result = 0;

                switch($op){
                    case '+':$result = $num1 + $num2;
                    echo "<h3>Addition result: " . $result . "</h3>";
                    break;

                    case '-':$result = $num1 - $num2;
                    echo "<h3>Difference result: " . $result . "</h3>";
                    break;

                    case '*':$result = $num1 * $num2;
                    echo "<h3>Multiplication result: " . $result . "</h3>";
                    break;

                    case '/':$result = $num1 / $num2;
                    echo "<h3>Division result: " . $result . "</h3>";
                    break;

                    case '%':$result = $num1 % $num2;
                    echo "<h3>Modulus result: " . $result . "</h3>";
                    break;

                    default : echo "<h3>Sorry no result</h3>";
                    break;
                }
            }
        ?>
    </body>
</html>
