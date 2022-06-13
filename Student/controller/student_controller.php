 <?php
    include 'C:\xampp\htdocs\Student\model/DBConfig.php';
	
    $s_id="";
	$err_s_id="";
		
	$s_name="";
    $err_s_name="";
	
    $s_address="";
    $err_s_address="";
	
	
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
		if(empty($_POST["s_name"])){
		    $err_s_name = "Student Name Required!";
			$hasError = true;
	    }
		else{
		    $s_name = $_POST["s_name"];
	    }

		
		if(!$hasError){
			$rs = delete_student($s_name);
			if($rs === true){
				header("Location:  view_all_student.php");
			}
			$err_db = $rs;
		}
	}
	
	elseif(isset($_POST["update_student"]))
{
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
			$rs = update_student($s_name,$s_address);
			if($rs === true){
				header("Location:  view_all_student.php");
			}
			$err_db = $rs;
		}
			
		  
}

					
	function insert_student($s_id,$s_name,$s_address){
		$query = "INSERT INTO `student`(`s_id`,`s_name`,`s_address`) VALUES ('$s_id','$s_name','$s_address')";
		return execute($query);
	}
	
	function delete_student($s_name){
		$query="DELETE FROM student WHERE s_name='$s_name'";		
		$rs = execute($query);
		
		return $rs;
	}
	
	function update_student($s_name,$s_address){
		$query="UPDATE `student` SET `s_address`='$s_address' WHERE `s_name`='$s_name'";		
		$rs = execute($query);
		
		return $rs;
	}

	
?>