<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "weblab";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM student";
	$result = $conn->query($sql); 
	$marks = array() ;
	echo "<table border='2'><caption>Before Sorting </caption><br>";
	echo "<tr><th>USN</th><th>NAME</th><th>Marks</th></tr>"; 
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{ 
			echo "<tr><td>". $row["usn"]."</td>";
			echo "<td>". $row["name"]."</td>";
			echo "<td>". $row["marks"]."</td></tr>";
			$marks[] = $row["marks"] ;
		}
		
	}
	$n = sizeof($marks) ;
	
	for($i=0;$i<$n;$i++)
	{
		$min=$i;
		for($j=$i+1;$j<$n;$j++)
		{
			if($marks[$j]<$marks[$min])
				$min=$j;
		}
		$temp=$marks[$min];
		$marks[$min]=$marks[$i];
		$marks[$i]=$temp;
	}
	
	$name = [] ;
	$usn = [] ;

	$result = $conn->query($sql);

	if ($result->num_rows> 0)
	{
		while($row = $result->fetch_assoc()) 
		{
			for($i=0;$i<$n;$i++) 
			{
				if($row["marks"] == $marks[$i]) 
				{
					$name[$i]=$row["name"];
					$usn[$i]=$row["usn"];
				}
			}
		}
	}
	echo "<br><table border='2'><caption>After Sorting </caption><br>";
	echo "<tr><th>USN</th><th>NAME</th><th>Marks</th></tr>"; 
	for($i = 0 ; $i < sizeof($marks) ; $i++)
	{
		echo "<tr><td>". $usn[$i]."</td>";
		echo "<td>". $name[$i]."</td>";
		echo "<td>". $marks[$i]."</td></tr>";
	}
?>