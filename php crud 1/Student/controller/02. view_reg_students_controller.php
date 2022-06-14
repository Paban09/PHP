<?php
	include 'C:\xampp\htdocs\Student\model/DBConfig.php';
	$conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
	if($conn){
	$query = "select id,name_english,phone_number,gender,fathers_name,birth_date,blood_group,photo from tbl_student_reg";
	$result = mysqli_query($conn,$query);
		//var_dump($result);
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Student Id</th>
					<th>Student Name</th>
					<th>Phone Number</th>
					<th>Gender</th>
					<th>Father's Name</th>
					<th>Birth-date</th>
					<th>Blood Group</th>
					<th>Photo</th>
				  </tr>";
		while($row = mysqli_fetch_assoc($result)){
			
			echo "<tr>";
			
				echo"<td>".$row["id"]."</td>";
				echo"<td>".$row["name_english"]."</td>";
				echo"<td>".$row["phone_number"]."</td>";
				echo"<td>".$row["gender"]."</td>";
				echo"<td>".$row["fathers_name"]."</td>";
				echo"<td>".$row["birth_date"]."</td>";
				echo"<td>".$row["blood_group"]."</td>";
				echo"<td>".$row["photo"]."</td>";
				
			echo"</tr>";
		}
		echo "</table>";
	}
	else{
		echo mysqli_connect_error();
	}
?>
