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
 $business= new business();
 if (isset($_REQUEST['delete'])) {
 	$business->delete($_REQUEST['delete']);
 }
?>
<h3>Business Messages</h3>
<table class="my_table">
<thead>
	<th>#</th>
	<th>Sender</th>
	<th>Sender email</th>
	<th>Message</th>
	<th>date</th>
	<th>Operation</th>
</thead>
	<?php
		$res=$business->all();
		$no = 1;
		foreach ($res as $key) {
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td>".$key->name."</td>";
			echo "<td>".$key->email."</td>";
			echo "<td>".$key->message."</td>";
			echo "<td>".$key->reg_date."</td>";
			echo "<td><a href='".$key->id."' id='delete_business'>Delete record</a></td>";
			echo "</tr>";
		}
	?>
</table>