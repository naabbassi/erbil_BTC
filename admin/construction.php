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
<h3>Management Construction Progress Files</h3>
<form class="iform" method="post" action="index.php" enctype="multipart/form-data">
	<p>
		<label>English Text :</label>
		<input typ="text" name="english_title">
	</p>
	<p>
		<label>Kurdish Text :</label>
		<input typ="text" name="kurdish_title">
	</p>
	<p>
		<label>Arabic Text :</label>
		<input typ="text" name="arabic_title">
	</p>
		<p>
		<label>Select Image :</label>
		<input type="file" name="image_file">
	</p>
	<p><input type="submit" value="Submit"></p>
</form>
<br><br>
<table>
	<thead>
		<th>No</th>
		<th>English Title</th>
		<th>Kurdish Title</th>
		<th>Arabic Title</th>
		<th>Operation</th>
	</thead>
	<?php 
		require_once('../class/modelslist.php');
		$progress = new progress();
		$res=$progress->all();
		$no=1;
		foreach ($res as $key) { ?>
			<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $key->english_title; ?></td>
			<td><?php echo $key->kurdish_title; ?></td>
			<td><?php echo $key->arabic_title; ?></td>
			<td><a href="<?php echo $key->id ?>" id="progress_delete">Delete</a></td>
			</tr>
		<?php
		$no++;
		 }
	?>
</table>