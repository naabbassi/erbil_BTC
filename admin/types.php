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
<h3>Manage Types</h3>
<form class="iform" method="post" action="index.php" enctype="multipart/form-data">
	<p>
		<label>Type Title :</label>
		<input typ="text" name="type_title">
	</p>
	<p>
		<label>Select Image :</label>
		<input type="file" name="type_image">
	</p>
	<p><input type="submit" value="Submit"></p>
</form>
<br><br>
<table>
	<thead>
		<th>No</th>
		<th>Title</th>
		<th>Operation</th>
	</thead>
	<?php 
		require_once('../class/modelslist.php');
		$types = new type();
		$res=$types->all();
		$no=1;
		foreach ($res as $key) { ?>
			<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $key->title; ?></td>
			<td><a href="<?php echo $key->id ?>" id="type_delete">Delete</a></td>
			</tr>
		<?php
		$no++;
		 }
	?>
</table>