	<!-- sixth slide Downloads -->
	<div class="main sixth_slide" id="sixth_slide">
		<div class="blur"></div>
		<div class="head">
			<div id="second_head_left" class="left active">
				<p class="menu_title">Offices & business center</p>
			</div>
			<div id="second_head_right" class="right deactive">
				<p><a href="#second_slide"  id="goto">Erbil Business and Trade Center</a></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="accordion">
		<style type="text/css">
				
				#example11 li {position:relative;background-position:center center;background-size:cover !important;background-repeat:no-repeat;z-index:9999;-webkit-box-shadow: -39px 0px 50px -16px rgba(0,0,0,0.75);
				-moz-box-shadow: -39px 0px 50px -16px rgba(0,0,0,0.75);
				box-shadow: -39px 0px 50px -16px rgba(0,0,0,0.75);
				border-left:1px solid #777;
				}
				#example11 div.slider-bg {top:300px;height:120px;width:100%;left:0;position:absolute;z-index:10;opacity:.5;}
				#example11 div.slider-info {top:295px;height:72px;left:0;position:absolute;width:65px;z-index:15;padding:15px;transition:all 0.5s;}
				#example11 div.slider-info strong {font-size:18px;color:#fff;margin-bottom:5px;}
				#example11 div.slider-info p {display:none;font-size:14px;line-height:20px;letter-spacing:1px;color:#fff;margin:10px 0 0 0 !important;text-align:left;}
				#example11 li.slider-open div.slider-info {width:900px;transition:all 0.5s;}
				#example11 li.slider-open div.slider-info strong {font-size:22px;}
				#example11 li.slider-open div.slider-info p {display:block;}
			</style>
			<ul id="example11" >
				<li style="background:url('png/office1.jpg');" class="slider">
					
					<div class="slider-bg" style="background:#000000;"></div>
					<div class="slider-info">
						<strong>Offices features</strong>
						<p class="slider-text">This Center represents the main events of the Tower , it provides a large number of offices due to the needs with different areas (small -medium -large ) which are available to be owned or rent for clients and both local and foreign companies .</p>
					</div>
				</li>
				<li style="background:url('png/office4.jpg')" class="slider">
					<div class="slider-bg" style="background:#d38306;"></div>
					<div class="slider-info">
						<strong>Design specification</strong>
						<p class="slider-text">The Tower design fits all users' need like ( lifts system-safety system- Automatic fire fighter -fire warning -CCTV cameras in public places due to Alarm system with Network , public phones and Television services ).</p>
					</div>
				</li>

				<li style="background:url('png/newoffice2.jpg')" class="slider ">
					<div class="slider-bg" style="background:#bb89ef;"></div>
					<div class="slider-info">
						<strong>Location</strong>
						<p class="slider-text">Symbolize the style and status of Business in the most prestigious location with its elegant design and prominent position to Sami Abdul Rahman Park  . 
</p>
					</div>
				</li>
				<li style="background:url('png/office3.jpg')" class="slider">
					<div class="slider-bg" style="background:#ea4d00;" ></div>
					<div class="slider-info">
						<strong>Building performance</strong>
						<p class="slider-text">Erbil business & Trade Center Tower has two main entrances  within the ground floor which contain reception halls and main lifts space for users and visitors _also has a special entrance opens by electronic Cards for the building occupants with the same level of the first floor and it is associated to the car parking center by a hanging bridge .</p>
					</div>
				</li>
				<li style="background:url('png/pool.jpg')" class="slider ">
					<div class="slider-bg" style="background:#8e0ffa;"></div>
					<div class="slider-info">
						<strong>Entertainment & health</strong>
						<p class="slider-text">Erbil Business & Trade Center also contains a healthy club with an external swimming pool on the 36th floor specialized for the users and visitors .</p>
					</div>
				</li>
				<li style="background:#777;" class="types" id="types">	
					<div class="slider-info">
						<strong>Types of plans</strong>
					</div>
					<?php
						$type= new type();
						$res=$type->all();
						foreach ($res as $key) { ?>
							<div class="type_item"><a href="types/thumb<?php echo $key->image_file; ?>" id="view"><img src="types/<?php echo $key->image_file; ?>"></a><p><?php echo $key->title; ?></p></div>
							
						<?php }
					 ?>
				</li>
			</ul>
		</div>
		<div class="image_viewer" id="image_viewer2">

		</div>
		<a href="#second_slide" class="arrow up_arrow" id="goto"><p class="arrow_box_left">Erbil BTC</p></a>
		<a href="#third_slide" class="arrow down_arrow" id="goto"><p class="arrow_box_left">5 Star hotel</p></a>
		<a href="#first_slide" class="arrow right_top_arrow" id="goto"><p class="arrow_box_right">Home</p></a>
	
	</div>
