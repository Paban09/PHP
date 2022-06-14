<?php include 'C:\xampp\htdocs\Student\controller/01. student_reg_controller.php'; ?>

<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Delete Student : </h3>
			
			<form action="" method="post">
			    <div>
				    <h4>Student Name:</h4>
					
					<input type = "text" name = "name_english" value="<?php echo $name_english; ?>"/>
					<span> <?php echo $err_name_english; ?> </span>
					
				</div>
				
					<input type = "submit" name = "delete_student" value = "Delete" />
				</div>
			</form>
		</div>
	</body>
    
</html>