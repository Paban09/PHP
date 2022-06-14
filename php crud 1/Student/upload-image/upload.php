<?php 
	
	if(isset($_POST['upload'])&& isset($_FILES['image'])){		
		
		echo"<pre>";
			print_r($_FILES['image']);
		echo"<pre>";
		
		$img_name=$_FILES['image']['name'];
		
		echo $img_name;				
		
	
	}else{
	
		header("Location: index.php");
	}

?>