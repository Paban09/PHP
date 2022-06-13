<?php include 'C:\xampp\htdocs\Student\controller/student_controller.php'; ?>

<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Delete Student : </h3>
			
			<form action="" method="post">
			    <div>
				    <h4>Student Name:</h4>
					<input type = "text" name = "s_name" value="<?php echo $s_name; ?>"/>
					<span> <?php echo $err_s_name; ?> </span>
				</div>
				
					<input type = "submit" name = "delete_student" value = "Delete" />
				</div>
			</form>
		</div>
	</body>
    
</html>