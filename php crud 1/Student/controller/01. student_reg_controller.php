 <?php
    include 'C:\xampp\htdocs\Student\model/DBConfig.php';
	
    $s_id="";
	$err_s_id="";
		
	$s_name="";
    $err_s_name="";
	
    $s_address="";
    $err_s_address="";
	
	
	
	$id="";
	$err_id="";
	
	$name_english="";
	$err_name_english="";
	
	$phone_number="";
	$err_phone_number="";
	
	$fathers_name="";
	$err_fathers_name="";
	
	$blood_group="";
	$err_blood_group="";
	
	
	
	
    $err_db="";    
	$hasError = false;

    if(isset($_POST["add_student"])){
		
		if(empty($_POST["s_id"])){
		    $err_s_id = "Student Id!!";
			$hasError = true;
	    }
		else{
		    $s_id = $_POST["s_id"];
	    }
		
		if(empty($_POST["s_name"])){
		    $err_s_name = "Student Name Required!";
			$hasError = true;
	    }
		else{
		    $s_name = $_POST["s_name"];
	    }

	    if(empty($_POST["s_address"])){
		    $err_s_address = "Student Address Required!!";
			$hasError = true;
	    }
		else{
		    $s_address = $_POST["s_address"];
	    }
		
				
		
		if(!$hasError){
			$rs = insert_student($s_id,$s_name,$s_address);
			if($rs === true){
				header("Location: view_all_student.php");
			}
			$err_db = $rs;
		}
	}
	
	elseif(isset($_POST["delete_student"])){
		if(empty($_POST["name_english"])){
		    $err_name_english = "Student Name Required!";
			$hasError = true;
	    }
		else{
		    $name_english = $_POST["name_english"];
	    }

		
		if(!$hasError){
			$rs = delete_student($name_english);
			if($rs === true){
				header("Location:  00. view_reg_students.php");
			}
			$err_db = $rs;
		}
	}
	
	elseif(isset($_POST["update_student"]))
{
	if(empty($_POST["name_english"])){
		    $err_name_english = "Student Name Required!";
			$hasError = true;
	    }
		else{
		    $name_english = $_POST["name_english"];
	    }

	    if(empty($_POST["phone_number"])){
		    $err_phone_number = "Student Phone Number Required!!";
			$hasError = true;
	    }
		else{
		    $phone_number = $_POST["phone_number"];
	    }
		
		if(empty($_POST["fathers_name"])){
		    $err_fathers_name = "Father's Name Required!!";
			$hasError = true;
	    }
		else{
		    $fathers_name = $_POST["fathers_name"];
	    }
		
		if(empty($_POST["blood_group"])){
		    $err_blood_group = "Blood Group Name Required!!";
			$hasError = true;
	    }
		else{
		    $blood_group = $_POST["blood_group"];
	    }
				
		
		if(!$hasError){
			$rs = update_student($name_english,$phone_number,$fathers_name,$blood_group);
			if($rs === true){
				header("Location:  00. view_reg_students.php");
			}
			$err_db = $rs;
		}
			
		  
}

					
	function insert_student($s_id,$s_name,$s_address){
		$query = "INSERT INTO `student`(`s_id`,`s_name`,`s_address`) VALUES ('$s_id','$s_name','$s_address')";
		return execute($query);
	}
	
	function delete_student($name_english){
		$query="DELETE FROM tbl_student_reg WHERE name_english='$name_english'";		
		$rs = execute($query);
		
		return $rs;
	}
	
	function update_student($name_english,$phone_number,$fathers_name, $blood_group){
		$query="UPDATE `tbl_student_reg` SET `phone_number`='$phone_number', `fathers_name`='$fathers_name',`blood_group`='$blood_group' WHERE `name_english`='$name_english'";		
		$rs = execute($query);
		
		return $rs;
	}

	
?>