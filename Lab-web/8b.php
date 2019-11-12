<?php 
    $matrix1 = array(array(1,2), array(4,5));
    $matrix2 = array(array(1,2), array(4,5));

    $rowCount = count($matrix1);
    $colCount = count($matrix1[0]);

    echo "<br>";
    echo "The order of matrix A is:" .$rowCount."x".$colCount;
    echo "<br>";
    echo "The order of matrix B is:" .$rowCount."x".$colCount;

    echo "<br>";
    echo "<br>";
    
    echo "The ip matrix A is:";
    echo "<br>";
    for($r = 0; $r<$rowCount;$r++)
    {
        for($c = 0; $c<$colCount;$c++)
        {
            echo $matrix1[$r][$c];
            echo ' ';
        }
        echo "<br>";
    }

    echo "The ip matrix B is:";
    echo "<br>";
    for($r = 0; $r<$rowCount;$r++)
    {
        for($c = 0; $c<$colCount;$c++)
        {
            echo ' ';
            echo $matrix2[$r][$c];
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    echo "The transpose matrix A is:";
    echo "<br>";
    for($r=0; $r<$rowCount; $r++)
    {
        for($c=0; $c<$colCount; $c++)
        {
            echo $matrix1[$c][$r];
            echo ' ';
        }
        echo "<br>";
    }

    echo "The transpose matrix B is:";
    echo "<br>";
    for($r=0; $r<$rowCount; $r++)
    {
        for($c=0; $c<$colCount; $c++)
        {
            echo $matrix2[$c][$r];
            echo ' ';
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    echo "Sum of matrices:";
    echo "<br>";
    for($r = 0; $r<$rowCount;$r++)
    {
        for($c = 0; $c<$colCount;$c++)
        {
            $val = $matrix1[$r][$c] + $matrix2[$r][$c];
            echo $val . ' ';
        }
        echo "<br>";
    }

    $colCount1 = count($matrix1[0]);
    $rowCount2 = count($matrix2);

    echo "<br>";
    echo "<br>";

    echo "Multiplication of matrices:";
    echo "<br>";
    $multiplied_matrix = array();
    if($colCount == $rowCount2) 
    {
        for($ri = 0;$ri < $rowCount;$ri++) 
        {
            for($ci = 0;$ci < $colCount;$ci++) 
            {
                $multiplied_matrix[$ri][$ci] = 0;
                for($j=0;$j<$rowCount;$j++) 
                {
                    $multiplied_matrix[$ri][$ci] += $matrix1[$ri][$j] * $matrix2[$j][$ci];
                }
            }
        }
        for($ri = 0;$ri < $rowCount;$ri++) 
        {
            for($ci = 0;$ci < $colCount;$ci++) 
            { 
                echo ($multiplied_matrix[$ri][$ci].' ');
            }
            echo "<br>";
        } 
    } 
    else {
        echo "The matrix multiplication is not possible.";
    }
?>