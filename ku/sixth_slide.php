	<!-- sixth slide Downloads -->
	<div class="main sixth_slide" id="sixth_slide">
		<div class="blur"></div>
		<div class="head">
			<div id="second_head_left" class="left active">
				<p class="menu_title">ئوفیس و ناوەندی بازەرگانی</p>
				
			</div>
			<div id="second_head_right" class="right deactive">
				<p><a href="#second_slide"  id="goto">تاوه‌ری هه وڵێر بو بازرگانی و کار</a></p>
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
				#example11 div.slider-bg {top:300px;height:120px;width:100%;left:0;position:absolute;z-index:10;opacity:.6;}
				#example11 div.slider-info {top:290px;height:72px;left:0;position:absolute;width:65px;z-index:15;padding:5px;transition:all 0.5s;text-align:center;}
				#example11 div.slider-info strong {font-size:18px;color:#fff;margin-bottom:5px;}
				#example11 div.slider-info p {display:none;font-size:14px;line-height:20px;letter-spacing:1px;color:#fff;margin:0px 0 0 0 !important;text-align:right;}
				#example11 li.slider-open div.slider-info {width:900px;transition:all 0.5s;}
				#example11 li.slider-open div.slider-info strong {font-size:22px;}
				#example11 li.slider-open div.slider-info p {display:block;}
			</style>
			<ul id="example11" >
				<li style="background:url('png/office1.jpg');" class="slider">
					
					<div class="slider-bg" style="background:#000000;"></div>
					<div class="slider-info">
						<strong>ئوفیس</strong>
						<p class="slider-text">ئەو ناوەندە بەشی سەرەکی تاوەرەکەیە و چەندین ئۆفیسی جیاواز(بچوک-مامناوەمد-گەورە) بە پێی پێویست کە هەم بۆ کرێ و فرۆشتن بو کۆمپانیاکانی ناوخۆ و نێودەوڵەتی ئامادەن. 
-تاوەرەکە بە شێوەیەک دروستکراوە کە هەموو پێداویستییەکانی دانیشتوانی دابین دەکات (مەسعەد، سیستەمی ئەمنی، سیستەمی ئەوتوماتیکی ئاگرکەتنەوە، کامێرای CCTV لە شوێنە گشتییەکان، تەلەفۆنی گشتی و خزمەتگوزاری تەلەفزیۆن). 
</p>
					</div>
				</li>
				<li style="background:url('png/office4.jpg')" class="slider">
					<div class="slider-bg" style="background:#564c5b;"></div>
					<div class="slider-info">
						<strong>دیزاینی تایبه ت</strong>
						<p class="slider-text" >سەنتەری هەولێر بۆ کار و بازرگانی دوو دەرگای سەرەکی هەیە لە قاتی زەویدا کە بریتییە لە هۆڵی پێشوازی و مەسعەدی گشتی بۆ دانیشتوان و میوانان. هەروەها خاوەنی دەرگایەکی تایبەتییە کە بە کارتی ئەلەکترۆنی دەکرێتەوە و تەنیا بۆ دانیشتوانی بیناکە دروستکراوە کە لە هەمان قاتدایە و لە شوێنی پارکینگەوەش رێگە بۆ ئەو دەرگایە دروستکراوە. </p>
					</div>
				</li>
				<li style="background:url('png/newoffice2.jpg')" class="slider ">
					<div class="slider-bg" style="background:#bb89ef;"></div>
					<div class="slider-info">
						<strong></strong>
						<p class="slider-text"></p>
					</div>
				</li>
				<li style="background:url('png/office3.jpg')" class="slider">
					<div class="slider-bg" style="background:#7e5093;" ></div>
					<div class="slider-info">
						<strong>رێستۆرانت</strong>
						<p class="slider-text">سەنتەری هەولێر بۆ کار و بازرگانی هەروەها خاوەنی قاتێکە کە بریتییە لە رێستورانت، خواردنگەی فەست فود، کافێ و قاوەخانە بۆ دانیشتوان و میوانانی تاوەرەکەمان.</p>
					</div>
				</li>
				<li style="background:url('png/pool.jpg')" class="slider ">
					<div class="slider-bg" style="background:#0089f3;"></div>
					<div class="slider-info">
						<strong>ئاسودەیی و سڵامەتی</strong>
						<p class="slider-text">ناوەندی بازرگانی هەولێر هەروەها خاوەنی یانەیەکی تەندروستی و وەرزشی هەیە کە بریتییە لە مەلەوانگەیەکی کراوە لە قاتی 37. </p>
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
							<div class="type_item"><a href="../types/thumb<?php echo $key->image_file; ?>" id="view"><img src="../types/<?php echo $key->image_file; ?>"></a><p><?php echo $key->title; ?></p></div>
							
						<?php }
					 ?>
				</li>
			</ul>
		</div>
		<div class="image_viewer" id="image_viewer2">

		</div>
		<a href="#second_slide" class="arrow up_arrow" id="goto"><p class="arrow_box_left">ناوه ندی بازرگانی</p></a>
		<a href="#third_slide" class="arrow down_arrow" id="goto"><p class="arrow_box_left">هۆتێلی 5 ئەستێرە</p></a>
		<a href="#first_slide" class="arrow right_top_arrow" id="goto"><p class="arrow_box_right">سەڕەتا</p></a>
	</div>
