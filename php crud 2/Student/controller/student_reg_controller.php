<?php
	require_once 'C:\xampp\htdocs\Student\model/DBConfig.php';


	$name = "";
	$email="";
	$image="";
	$gender="";
	$date="";
	$insert_date="";
	$n_id="";

	$upload="";



	$err_db = "";
	

	if (isset($_POST["add_student"])) {

		echo "Submitted";



		// function upload($upload){
		// 	$name=basename($_FILES["$upload"]["name"]);
		// 	$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
		// 	$myfilename=uniqid().".$ext";
		// 	$target="upload_image/$myfilename";
		// 	$tmp_path=$_FILES["$upload"]["tmp_name"];
		// 	move_uploaded_file($tmp_path,$target);
		// 	return $target;
		// }

		// $rs = insert_student($_POST['name'],$_POST['email'],upload($_POST['image']),$_POST['gender'],$_POST['date'],$_POST['insert_date'],upload($_POST['n_id']));

		$name=basename($_FILES["image"]["name"]);
		$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
		$myfilename=uniqid().".$ext";
		$target="upload_image/$myfilename";
		$tmp_path=$_FILES["image"]["tmp_name"];
		move_uploaded_file($tmp_path,$target);


		
		

		
		$rs = insert_student($_POST['name'],$_POST['email'],$target,$_POST['gender'],$_POST['date'],$_POST['insert_date'],$_POST['n_id']);
		if($rs==true){
			header("Location: view.php");
		}
		$err_db=$rs;
			
	}elseif (isset($_POST["delete_student"])) {
		


		
		$rs = delete_student($_POST['name']);
		if ($rs === true) {
			header("Location: view.php");
		}
		$err_db = $rs;
		
	}elseif (isset($_POST["update_student"])) {

		$name=basename($_FILES["image"]["name"]);
		$ext=strtolower(pathinfo($name,PATHINFO_EXTENSION));
		$myfilename=uniqid().".$ext";
		$target="upload_image/$myfilename";
		$tmp_path=$_FILES["image"]["tmp_name"];
		move_uploaded_file($tmp_path,$target);

		$rs = update_student($_POST['name'],$_POST['email'],$target,$_POST['gender'],$_POST['date'],$_POST['insert_date']);

		if($rs==true){
			header("Location: view.php");
		}
		$err_db=$rs;
	}


	function insert_student($name,$email,$image,$gender,$date,$insert_date,$n_id)
	{
		$query = "INSERT INTO `image`(`name`,`email`,`image`,`gender`,`date`,`insert_date`,`n_id`) VALUES ('$name','$email','$image','$gender','$date','$insert_date','$n_id')";		
		return execute($query);		
	}

	function delete_student($name)
	{
		$query = "DELETE FROM `image` WHERE name='$name'";
		$rs = execute($query);

		return $rs;
	}

	function update_student($name,$email,$image,$gender,$date,$insert_date)
	{
		$query = "UPDATE `image` SET `email`='$email', `image`='$image',`gender`='$gender', `date`='$date', `insert_date`='$insert_date' WHERE `name`='$name'";
		$rs = execute($query);

		return $rs;
	}
