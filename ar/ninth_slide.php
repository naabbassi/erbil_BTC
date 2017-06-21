	<!-- ninth_slide -->
	<div class="main ninth_slide" id="ninth_slide">
		<div class="head">
			<div id="left" class="left active">
				<p class="menu_title">أتصل بنا</p>
				
			</div>
			<div id="right" class="right deactive">
				<p><a href="#second_slide" id="goto">مركز اربيل للاعمال و التجارة</a></p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="content">
			<div class="left_content7">
				<div class="tabs">
				<ul class="tab-links">
					<li class="active"><a href="#tab1">الاتصال العام</a></li>
					<li><a href="#tab2">الاتصال التجاري</a></li>
					<li><a href="#tab3">سي وي</a></li>
				</ul>

				<div class="tab-content">
					<div id="tab1" class="tab active">
						<form class="contact_form" id="contact_form" action="contact.php?type=general" method="post">
							<div class="row"><label>اسم : </label><input type="text" name="name" required></div>
							<div class="row"><label>ايميل : </label><input type="email" name="email" required></div>
							<div class="row"><label>رسالة : </label><textarea name="message" rows="6" cols="25" required></textarea></div>
							<div class="row"><input type="submit" id="submit" value="إرسال"></div>
						</form>
					</div>

					<div id="tab2" class="tab">
						<form class="contact_form" id="contact_form" action="contact.php?type=business" method="post">
							<div class="row"><label>اسم الشركة : </label><input type="text" name="name" required></div>
							<div class="row"><label>ايميل : </label><input type="email" name="email" required></div>
							<div class="row"><label>رسالة : </label><textarea name="message" rows="6" cols="25" required></textarea></div>
							<div class="row"><input type="submit" id="submit" value="إرسال"></div>
						</form>
					</div>

					<div id="tab3" class="tab">
					<form class="contact_form" action="contact.php?type=cv" enctype="multipart/form-data" method="post">
							<div class="row"><label>اسم : </label><input type="text" name="name" required></div>
							<div class="row"><label>ايميل : </label><input type="email" name="email" required></div>
							<div class="row"><label>سي وي ملف : </label><input type="file" name="file" required></div>
							<div class="row"><label>رسالة : </label><textarea name="message" rows="6" cols="25" required></textarea></div>
							<div class="row"><input type="submit" value="إرسال"></div>
					</form>
					</div>
					<div id="notification">Your message has been sent successfully</div>
				</div>
				</div>

			</div>
			<div class="right_content7">
				<div class="address">
				<h1 style="color:#efefef;font-size:46px;">أتصل بنا</h1><br>
				<p style='color:#fdfdfd;line-height:26px;text-align:right;font-size:18px;'>الهاتف : 2006 734 750 964+</p>
				<p style='color:#fdfdfd;line-height:26px;text-align:right;font-size:18px;'>ایمیل : info@erbil-btc.com</p>
				<p style='color:#fdfdfd;line-height:26px;text-align:right;font-size:18px;'>عنوان : الطريق الموصل - مقابل حديقة سامي عبدالرحمن - كردستان - أربيل - العراق</p>
				<img src="png/pen.png" class="pen">
				</div>
			</div>
		</div>
		<div class="footer">
							<div class="social">
							<a href="https://www.facebook.com/pages/IZ-Development-Real-Estate/557381587665840?ref=hl" target="_blank" class="facebook_white"></a>
							<a href="https://www.youtube.com/user/justicetower1"  target="_blank" class="youtube_white"></a>
							<a href="#ninth_slide" class="contact_white" id="goto"></a><br>
							<p style="color:#000;font-size:14px;letter-space:1px;">&copy; 2014 Erbil-BTC Inc</p>
				</div>
		</div>
		<a href="#eighth_slide" class="arrow up_arrow" id="goto"><p class="arrow_box_left">تنزيلات</p></a>
		<a href="#first_slide" class="arrow right_top_arrow" id="goto"><p class="arrow_box_right">بداية</p></a>
	</div>