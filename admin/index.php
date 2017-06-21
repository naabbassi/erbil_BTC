<?php
	session_start();
	require_once '../class/modelslist.php';
	if (isset($_SESSION['username'])) {
		$user = new user();
		$res = $user->count("username='".$_SESSION['username']."' and password='".$_SESSION['password']."'");
      if ($res == 1) 
      {

      } else {
        $errors='Session not valid or expired';
        include 'login.php';
        exit();
      }
	}
	else
	{
		include 'login.php';
		exit();
	}
?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
</head>
<body>
</body>
<div class="container">
	<div class="nav">
		<ul>
			<li><a id="load_link" href="general.php">General Messages</a></li>
			<li><a id="load_link" href="business.php">Business Messages</a></li>
			<li><a id="load_link" href="cv_files.php">C.V Files</a></li>
			<li><a id="load_link" href="construction.php">Construction Progress</a></li>
			<li><a id="load_link" href="types.php">Types</a></li>
			<li><a id="load_link" href="downloads.php">Download</a></li>
			<li><a href="login.php?logout">Logout</a></li>
		</ul>
	</div>
	<br>
	<div id="loader">
		<?php
		if (isset($_POST['english_title']) & isset($_POST['kurdish_title']) & isset($_POST['arabic_title'])) {
			include '../class/resize.php';
			$progress = new progress();
			if (isset($_FILES['image_file']) && $_FILES['image_file']['error'] == 0) {
			        $rand =rand();
			        $filename=rand().$_FILES['image_file']['name'];
			        $manipulator = new ImageManipulator($_FILES['image_file']['tmp_name']);
			        // resizing to 200x200
			        $newImage = $manipulator->resample(550,550);
			        // saving file to uploads folder
			        $manipulator->save('../progress/thumb'.$filename);
			        if(move_uploaded_file($_FILES['image_file']['tmp_name'], '../progress/'.$filename)){
			        	$progress->datamembers=array(
			        		english_title=>$_POST['english_title'],
			        		kurdish_title=>$_POST['kurdish_title'],
			        		arabic_title=>$_POST['arabic_title'],
			        		image_location=>$filename
			        		);
			        	$progress->Save();
			            echo "Your construction file has been uploaded successfuly.";
			        }
			    }
		} 
		if (isset($_POST['type_title'])) {
			include '../class/resize.php';
			$type = new type();
			if (isset($_FILES['type_image']) && $_FILES['type_image']['error'] == 0) {
			        $rand =rand();
			        $filename=rand().$_FILES['type_image']['name'];
			        $manipulator = new ImageManipulator($_FILES['type_image']['tmp_name']);
			        // resizing to 200x200
			        $newImage = $manipulator->resample(550,550);
			        // saving file to uploads folder
			        $manipulator->save('../types/thumb'.$filename);
			        if(move_uploaded_file($_FILES['type_image']['tmp_name'], '../types/'.$filename)){
			        	$type->datamembers=array(
			        		title=>$_POST['type_title'],
			        		image_file=>$filename
			        		);
			        	$type->Save();
			            echo "Your type file has been uploaded successfuly.";
			        }
			    }
		} 
		if (isset($_POST['file_title'])) {
			include '../class/resize.php';
			$download = new download();
			if (isset($_FILES['down_file']) && $_FILES['down_file']['error'] == 0) {
			        $rand =rand();
			        $filename=rand().$_FILES['down_file']['name'];
			        if(move_uploaded_file($_FILES['down_file']['tmp_name'], '../upload/'.$filename)){
			        	$download->datamembers=array(
			        		title=>$_POST['file_title'],
			        		description=>$_POST['description'],
			        		file_size=>$_POST['file_size'],
			        		file_name=>$filename
			        		);
			        	$download->Save();
			            echo "Your type file has been uploaded successfuly.";
			        }
			    }
		}
		 ?>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.nav #load_link').click(function(e){
			var file = $(this).attr('href');
			$('#loader').load(file);
			return false;
		});
		$('#loader').on('click','#delete_general',function(){
			if(confirm('Are you sure to delete this record'))
			{	
				var td = $(this).parent();
				var tr = td.parent();
				$.ajax({
					url:'general.php?delete='+ $(this).attr('href'),
					type:'POST',
					success:function(data){
					console.log(data);
					tr.remove();
					},
					error:function(data){
					console.log(data);
					}
				});
			}
			return false;
		});
		$('#loader').on('click','#delete_business',function(){
			if(confirm('Are you sure to delete this record'))
			{	
				var td = $(this).parent();
				var tr = td.parent();
				$.ajax({
					url:'business.php?delete='+ $(this).attr('href'),
					type:'POST',
					success:function(data){
					console.log(data);
					tr.remove();
					},
					error:function(data){
					console.log(data);
					}
				});
			}
			return false;
		});
		$('#loader').on('click','#delete_cv',function(){
			if(confirm('Are you sure to delete this record'))
			{	
				var td = $(this).parent();
				var tr = td.parent();
				$.ajax({
					url:'cv_files.php?delete='+ $(this).attr('href'),
					type:'POST',
					success:function(data){
					console.log(data);
					tr.remove();
					},
					error:function(data){
					console.log(data);
					}
				});
			}
			return false;
		});
		/* Delete Progress Item */
		$('#loader').on('click','#progress_delete',function(){
			if(confirm('Are you sure to delete this record'))
			{	
				var td = $(this).parent();
				var tr = td.parent();
				$.ajax({
					url:'operation.php?operation=delete_progress&id='+ $(this).attr('href'),
					type:'POST',
					success:function(data){
					console.log(data);
					tr.remove();
					},
					error:function(data){
					console.log(data);
					}
				});
			}
			return false;
		});
		/* Delete Type Item */
		$('#loader').on('click','#type_delete',function(){
		if(confirm('Are you sure to delete this record'))
		{	
				var td = $(this).parent();
				var tr = td.parent();
				$.ajax({
					url:'operation.php?operation=delete_type&id='+ $(this).attr('href'),
					type:'POST',
					success:function(data){
					console.log(data);
					tr.remove();
					},
					error:function(data){
					console.log(data);
					}
				});
			}
			return false;
		});
		/* Delete Download File Item */
		$('#loader').on('click','#download_delete',function(){
		if(confirm('Are you sure to delete this record'))
		{	
				var td = $(this).parent();
				var tr = td.parent();
				$.ajax({
					url:'operation.php?operation=delete_download&id='+ $(this).attr('href'),
					type:'POST',
					success:function(data){
					console.log(data);
					tr.remove();
					},
					error:function(data){
					console.log(data);
					}
				});
			}
			return false;
		});
	});
</script>
</html>