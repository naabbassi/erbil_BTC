<?php
require_once('../class/modelslist.php');
$operation=$_REQUEST['operation'];
switch ($operation) {
	case 'delete_progress':
		$progress=new progress();
		$res=$progress->findbykey($_REQUEST['id']);
		unlink('../progress/'.$res->image_location);
		unlink('../progress/thumb'.$res->image_location);
		$progress->delete($_REQUEST['id']);
		echo "1";
		break;
	case 'delete_type':
		$type=new type();
		$res=$type->findbykey($_REQUEST['id']);
		unlink('../types/'.$res->image_file);
		unlink('../types/thumb'.$res->image_file);
		$type->delete($_REQUEST['id']);
		echo "1";
		break;
	case 'delete_download':
		$download=new download();
		$res=$download->findbykey($_REQUEST['id']);
		unlink('../upload/'.$res->file_name);
		unlink('../upload/thumb'.$res->file_name);
		$download->delete($_REQUEST['id']);
		echo "1";
		break;
	
	default:
		# code...
		break;
}
?>