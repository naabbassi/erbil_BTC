
	<!-- Seventh Slide  Contact Us -->
	<div class="main seventh_slide" id="seventh_slide">
		<h1 class="progress_title">ســـــير تـقــدم الــبناء</h1>
		
			<a class="prev disabled">></a>
			<a class="next disabled"><</a>
			<div id="ps_slider" class="ps_slider">
			<div id="ps_albums">
				<?php 
					$progress = new progress();
					$res=$progress->all();
					foreach ($res as $key) { $deg=rand(-7,7); ?>
						<div class="ps_album" style="opacity:0;-webkit-transform:rotate(<?php echo $deg ?>deg);transform:rotate(<?php echo $deg ?>);">
							<a href="../progress/<?php echo $key->image_location ?>" id="view"><img src="../progress/thumb<?php echo $key->image_location ?>" alt=""/></a>
							<p><?php echo $key->arabic_title ?></p>
						</div>
					<?php }
				?>
			</div>	
		</div>
		<div class="image_viewer" id="image_viewer1">

		</div>
		<a href="#fifth_slide" class="arrow up_arrow" id="goto"><p class="arrow_box_left">مميزات المشروع</p></a>
		<a href="#eighth_slide" class="arrow down_arrow" id="goto"><p class="arrow_box_left">تنزيلات</p></a>
		<a href="#first_slide" class="arrow right_top_arrow" id="goto"><p class="arrow_box_right">بداية</p></a>
	</div>