	<!-- eighth_slide -->
	<div class="main eighth_slide" id="eighth_slide">
			<img src="png/erbil_btc2.png" style="height:17%;top:2%;left:30%;position:absolute;">
			<h1 style="height:20%;top:5%;left:40%;position:absolute;color:white;font-size:43px;letter-spacing:1px;font-family:helvetica;">داگــــــــرتــــــــــن</h1>
			<P style="height:20%;top:12%;left:40%;position:absolute;color:white;letter-spacing:7px;">Erbil-BTC DOWNLOAD</P>
		<div class="download_area">
		<table class="download_table">
			<tr>
				<td>نێوی فایل</td>
				<td>شڕۆڤە</td>
				<td>سایزی فایل</td>
				<td>لینکی داگڕتن</td>
			</tr>
						<?php
			$download= new download();
			$res=$download->all();
			foreach ($res as $key) { ?>
				<tr>
					<td><?php echo $key->title ?></td>
					<td><?php echo $key->description ?></td>
					<td><?php echo $key->file_size ?></td>
					<td><a href="../upload/<?php echo $key->file_name ?>" download>Download</a></td>
				</tr>
			<?php }
			 ?>
		</table>
		</div>
		<a href="#seventh_slide" class="arrow up_arrow" id="goto"><p class="arrow_box_left">بیناسازی</p></a>
		<a href="#ninth_slide" class="arrow down_arrow" id="goto"><p class="arrow_box_left">پەیوەندی</p></a>
		<a href="#first_slide" class="arrow right_top_arrow" id="goto"><p class="arrow_box_right">سەڕەتا</p></a>
	</div>