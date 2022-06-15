<?php
	include 'C:\xampp\htdocs\Student\model/DBConfig.php';
	$conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
	if($conn){
	$query = "select name,email,image,gender,date,insert_date,n_id from image";
	$result = mysqli_query($conn,$query);
		//var_dump($result);
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Student Name</th>
					<th>Student Email</th>
					<th>image</th>
					<th>gender</th>
					<th>date</th>
					<th>insert date</th>
					<th>n_id</th>
					
				  </tr>";
		while($row = mysqli_fetch_assoc($result)){
			
			echo "<tr>";
			
				
				echo"<td>".$row["name"]."</td>";
				echo"<td>".$row["email"]."</td>";

				echo"<td ><img width='80px' height='100px' src='".$row["image"]."'></td>";

				echo"<td>".$row["gender"]."</td>";
				echo"<td>".$row["date"]."</td>";
				echo"<td>".$row["insert_date"]."</td>";

				echo"<td ><img width='80px' height='100px' src='".$row["n_id"]."'></td>";
				
				
			echo"</tr>";
		}
		echo "</table>";
	}
	else{
		echo mysqli_connect_error();
	}
?>
