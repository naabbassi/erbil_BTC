<?php
session_start();
 require_once '../class/modelslist.php';
 	if (isset($_SESSION['username'])) {
		$user = new user();
		$res = $user->count("username='".$_SESSION['username']."' and password='".$_SESSION['password']."'");
      if ($res == 1) 
      {

      } else {
        echo "Permission not valid";
        exit();
      }
	}
	else
	{
		echo "Permission not valid";
		exit();
	}
 ?>
<h3>Manage Files</h3>
<form class="iform" method="post" action="index.php" enctype="multipart/form-data">
	<p>
		<label>Title :</label>
		<input typ="text" name="file_title">
	</p>
	<p>
		<label>Description :</label>
		<textarea name="description"></textarea>
	</p>
	<p>
		<label>File Size :</label>
		<input typ="text" name="file_size">
	</p>
		<p>
		<label>Select Image :</label>
		<input type="file" name="down_file">
	</p>
	<p><input type="submit" value="Submit"></p>
</form>
<br><br>
<table>
	<thead>
		<th>No</th>
		<th>Title</th>
		<th>Description</th>
		<th>file_size</th>
		<th>Operation</th>
	</thead>
	<?php 
		require_once('../class/modelslist.php');
		$download = new download();
		$res=$download->all();
		$no=1;
		foreach ($res as $key) { ?>
			<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $key->title; ?></td>
			<td><?php echo $key->description; ?></td>
			<td><?php echo $key->file_size; ?></td>
			<td><a href="<?php echo $key->id ?>" id="download_delete">Delete</a></td>
			</tr>
		<?php
		$no++;
		 }
	?>
</table>