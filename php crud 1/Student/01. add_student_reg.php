<?php include 'C:\xampp\htdocs\Student\controller/01. student_reg_controller.php'; ?>

<html>
    <head></head>
	
	<body>
	    <div align="center">
		    <h3>Add Student</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action=""  method="post">
			
				<div>
				    <h4>Student ID:</h4>
					<input  type = "text" name = "s_id" value="<?php echo $s_id; ?>"/>
					<span > <?php echo $err_s_id; ?> </span>
				</div>
				
				
			    <div>
				    <h4>Student Name:</h4>
					<input  type = "text" name = "s_name" value="<?php echo $s_name; ?>"/>
					<span > <?php echo $err_s_name; ?> </span>
				</div>
				
				<div>
				    <h4>Student Address:</h4>
					<input  type = "text" name = "s_address" value="<?php echo $s_address; ?>"/>
					<span > <?php echo $err_s_address; ?> </span>
				</div>
				
				
				
				
				

				<div>
					<input type = "submit" name = "add_student" value = "Add" />
				</div>
			</form>
		</div>
	</body>
    
</html>