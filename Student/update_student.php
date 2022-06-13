<?php include 'C:\xampp\htdocs\Student\controller/student_controller.php'; ?>
<html>
	<head></head>
	
	<body>
		<center>
		<form action="" onsubmit=" " method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:DodgerBlue;"><b>Student Update Pannel</b></h1></legend>
			<table>
				
				<tr>
					<td><span >Student Name:</span></td>
					<td></td>
					<td><input id="s_name" type="text" name="s_name" value="<?php echo $s_name;?>"> </td>
					<td><span id="err_s_name"><span><?php echo $err_s_name;?></span></td>
				</tr>
				<tr>
					<td><span>Address:</span></td>
					<td></td>
					<td><input id="s_address" type="address" name="s_address" value="<?php echo $s_address;?>"> </td>
					<td><span id="err_s_address"><span><?php echo $err_s_address;?></span></td>
				</tr>

               <tr>
			   
			   <td>
			   <input type="Submit" name="update_student" value="confirm">
			   </td>
			  
				</tr>

				</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>