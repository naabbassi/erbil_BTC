<?php
include 'class/modelslist.php';
$type=$_REQUEST['type'];
switch ($type) {
	case 'general':
	$general =new general();
		$general->datamembers=array(
			name=>$_REQUEST['name'],
			email=>$_REQUEST['email'],
			message=>$_REQUEST['message'],
			reg_date=>date("Y/m/d")
			);
		$general->Save();
		echo "Your message has been sent successfully";
		break;
	case 'business':
	$business =new business();
		$business->datamembers=array(
			name=>$_REQUEST['name'],
			email=>$_REQUEST['email'],
			message=>$_REQUEST['message'],
			reg_date=>date("Y/m/d")
			);
		$business->Save();
		echo "Your message has been sent successfully";
		break;
		/* Submit cv files*/
	case 'cv':
	  $file_name = rand();
      $target_path = "upload/".$file_name.$_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
		$cv =new cv();
		$cv->datamembers=array(
			name=>$_REQUEST['name'],
			email=>$_REQUEST['email'],
			message=>$_REQUEST['message'],
			file_name=>$file_name.$_FILES['file']['name'],
			reg_date=>date("Y/m/d")
			);
		$cv->Save();
         header("location: index.php");
    } 
		break;

}
?>