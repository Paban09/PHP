<?php
	include 'C:\xampp\htdocs\Student\model/DBConfig.php';
	$conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
	if($conn){
	$query = "select s_id,s_name,s_address from student";
	$result = mysqli_query($conn,$query);
		//var_dump($result);
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Student Id</th><th>Student Name</th><th>Student Address</th>
				  </tr>";
		while($row = mysqli_fetch_assoc($result)){
			
			echo "<tr>";
				echo"<td>".$row["s_id"]."</td>";
				echo"<td>".$row["s_name"]."</td>";
				echo"<td>".$row["s_address"]."</td>";
				
			echo"</tr>";
		}
		echo "</table>";
	}
	else{
		echo mysqli_connect_error();
	}
?>
