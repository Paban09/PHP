<?php include 'C:\xampp\htdocs\Student\controller/01. student_reg_controller.php'; ?>
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
					<td><input id="name_english" type="text" name="name_english" value="<?php echo $name_english;?>"> </td>
					<td><span id="err_name_english"><span><?php echo $err_name_english;?></span></td>
				</tr>
				
				<tr>
					<td><span>Phone Number:</span></td>
					<td></td>
					<td><input id="phone_number" type="text" name="phone_number" value="<?php echo $phone_number;?>"> </td>
					<td><span id="err_phone_number"><span><?php echo $err_phone_number;?></span></td>
				</tr>
				
				
				<tr>
					<td><span>Father's Name:</span></td>
					<td></td>
					<td><input id="fathers_name" type="text" name="fathers_name" value="<?php echo $fathers_name;?>"> </td>
					<td><span id="err_fathers_name"><span><?php echo $err_fathers_name;?></span></td>
				</tr>
				
				<tr>
					<td><span>Blood group:</span></td>
					<td></td>
					<td><input id="blood_group" type="text" name="blood_group" value="<?php echo $blood_group;?>"> </td>
					<td><span id="err_blood_group"><span><?php echo $err_blood_group;?></span></td>
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