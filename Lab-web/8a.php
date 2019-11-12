<html>
    <head>
        <title>
            "PHP calculator"
        </title>
    </head>
    <body>
        <form action="8a.php" method="POST">
            <fieldset>
                <legend>Calculator</legend>
                <table>
                    <tr>
                        <td>Enter 1st number</td>
                        <td><input type="text" name="num1"></td>
                    </tr>
                    <tr>
                        <td>Enter 2nd number</td>
                        <td><input type="text" name="num2"></td>
                    </tr>
                    <tr>
                        <td>Select</td>
                        <td>
                            <select name="op">
                                <option>Choose an operation</option>
                                <option value="+">Addition</option>
                                <option value="-">Subtraction</option>
                                <option value="*">Multiplication</option>
                                <option value="/">Division</option>
                                <option value="%">Modulus</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="pop" value="Perform operation">
                        </td>
                    </tr>
                </table>
            </fieldset>
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

