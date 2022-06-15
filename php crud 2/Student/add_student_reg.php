<?php include 'C:\xampp\htdocs\Student\controller/student_reg_controller.php'; ?>
<html>

<head></head>

<body>
	<center>
		<form action="" onsubmit=" " method="post" enctype="multipart/form-data">
			<fieldset>
				<legend align="center">
					<h1 style="background-color:DodgerBlue;"><b>Add Student Pannel</b></h1>
				</legend>
				<table>

					<tr>
						<td><span>Student Name:</span></td>
						<td></td>
						<td><input id="name" type="text" name="name"> </td>

					</tr>

					<tr>
						<td><span>Email:</span></td>
						<td></td>
						<td><input id="email" type="text" name="email"> </td>

					</tr>


					<tr>
						<td><span>Image:</span></td>
						<td></td>
						<td><input id="image" type="file" name="image"> </td>

					</tr>

					<tr>
						<td><span>Birth Date:</span></td>
						<td></td>
						<td><input id="date" type="text" placeholder="yyyy-mm-dd" name="date"> </td>
					</tr>

					<tr>
						<td><span>Insert Time:</span></td>
						<td></td>
						<td><input id="insert_date" type="text" placeholder="yyyy-mm-dd 00:00" name="insert_date">
						</td>
					</tr>

					<tr>

						<td colspan="3">
							<span>Enter your gender: </span>

						</td>

						
						<td>

						  <input type="radio" id="gender" name="gender" value="1">
						  <label for="gender">male</label><br>



						  <input type="radio" id="gender" name="gender" value="2">
						  <label for="gender">female</label>



						<input type="radio" id="gender" name="gender" value="3">
						  <label for="gender">othrer</label>
						</td>

					</tr>

					<tr>
						<td><span>National ID:</span></td>
						<td></td>
						<td><input id="n_id" type="file" name="n_id"> </td>

					</tr>




					<tr>

						<td>
							<input type="submit" name="add_student" value="Add">
						</td>

					</tr>

				</table>
			</fieldset>
		</form>
	</center>
</body>

</html>