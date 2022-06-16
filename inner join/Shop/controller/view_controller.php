<?php
	include 'C:\xampp\htdocs\Shop\model/DBConfig.php';
	$conn = mysqli_connect($db_server, $db_uname, $db_pass, $db_name);
	if($conn){
	$query = "select orders.o_id, customers.c_id, customers.c_name, customers.c_address ,customers.c_country, orders.date from orders inner join customers on orders.c_id=customers.c_id";
	$result = mysqli_query($conn,$query);
		//var_dump($result);
		
		echo "<table border='1'>";
			echo "<tr>
					<th>Order id</th>

					<th>Customer id</th>
					<th>Customer name</th>
					<th>Customer address</th>
					<th>Customer country</th>
					<th>Orders date</th>


					
					
				  </tr>";
		while($row = mysqli_fetch_assoc($result)){
			
			echo "<tr>";
			
				
				echo"<td>".$row["o_id"]."</td>";
				echo"<td>".$row["c_id"]."</td>";
				echo"<td>".$row["c_name"]."</td>";
				echo"<td>".$row["c_address"]."</td>";
				echo"<td>".$row["c_country"]."</td>";
				echo"<td>".$row["date"]."</td>";



				
				
			echo"</tr>";
		}
		echo "</table>";
	}
	else{
		echo mysqli_connect_error();
	}
?>
