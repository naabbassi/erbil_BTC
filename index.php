<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" 
xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<title>Erbil Business and Trade Center</title>
		<meta property="og:title" content="Erbil Business And Trade Center ( Offices , Five Star Hotel , Coffe Village ) "/>
		<meta property="og:description" content="Erbil Business & Trade Center Tower is one of the major expansion projects in Erbil ,Through its being the first project by offering the best specifications of Architecture services for Erbil five stars Hotels .In plus what it can offer of entertainment events and services for Building occupants and users . The project is counted the large and the highest Tower in Erbil , with the area reaches 200.000 m2 distinguished on 36 floors with 3 underground floors and 120 m high .in plus of a huge Car Parking which is associated to the first floor of the Tower through a hanging bridge ."/>
		<meta property="og:image" content="http://erbil-btc.com/png/cafe_back.jpg"/>
		<meta property="og:image" content="http://erbil-btc.com/png/iz_logo.png"/>
		<meta property="og:image" content="http://erbil-btc.com/png/ngc_logo.png"/>
		<meta property="og:site_name" content="Erbil BTC"/>
		<meta property="og:email" content="info@erbil-btc.com"/>
		<meta property="og:phone_number" content="+978 750 734 2006"/>
		<meta name="description" content="Erbil business and trade center - Erbil Business & Trade Center Tower is one of the major expansion projects in Erbil ,Through its being the first project by offering the best specifications of Architecture services for Erbil five stars Hotels .In plus what it can offer of entertainment events and services for Building occupants and users . The project is counted the large and the highest Tower in Erbil , with the area reaches 200.000 m2 distinguished on 36 floors with 3 underground floors and 120 m high .in plus of a huge Car Parking which is associated to the first floor of the Tower through a hanging bridge . ">
		<meta name="keywords" content="erbil , business center ,erbil trade center , kurdistan , hawler , hewler , iraq trade center , iraq business trade center , 			kurdistan trade center">
		 <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<meta name="author" content="naser abbasi">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="stylesheet" type="text/css" href="responsive.css">
		<link rel="stylesheet" type="text/css" href="jquery.bxslider.css">
	</head>
	<body>
		<style type="text/css">
			.load{
				background:#f5f5f5;
				position:fixed;
				height:100%;
				width:100%;
				z-index:9999;
			}
			.loading {
			  position: absolute;
			  top: 45%;
			  left: 50%;
			  z-index:9999;
			  }
			  .loading:after {
			    content: '';
			    position: absolute;
			    width:60px;
			    height:60px;
			    top: 0;
			    left: 0;
			    border-radius:60px;
			    border: 10px solid transparent;
			    border-top-color:#39f;
			    border-left-color: #444;
			    border-right-color: #444;
			    border-bottom-color: #444;
			    -webkit-animation: spin 1s linear infinite;
			    animation: spin 1s linear infinite;
			  }

			@-webkit-keyframes spin {
			  0%   { -webkit-transform: rotate(0deg); }
			  100% { -webkit-transform: rotate(360deg); }
			}

			@keyframes spin {
			  0%   { transform: rotate(0deg); }
			  100% { transform: rotate(360deg); }
			}
		</style>
		<div class="load" id="load">
		<div class="loading"></div>
		</div>
		<div class="container">
	<?php
	require_once('class/modelslist.php');
		include 'first_page.php';
		include 'second_slide.php';
		include 'sixth_slide.php';
		include 'third_slide.php';
		include 'fourth_slide.php';
		include 'fifth_slide.php';
		include 'seventh_slide.php';
		include 'eighth_slide.php';
		include 'ninth_slide.php';
	?>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/borderMenu.js"></script>
		<script src="js/jquery-1.11.1.js"></script>
		<script src="js/jquery.bxslider.js"></script>
		<script src="js/photo-stack.js"></script>
		<script src="js/jquery1.8.1.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/jquery.zaccordion.js"></script>
		<script type="text/javascript">

		$(document).ready(function() { 
			$('#hor_menu1').toggle('slide');
			$('#hor_menu2').toggle('slide');
			$('#second_menu_left').slideToggle();
			$('#second_menu_right').slideToggle();
			$('#second_btc_left').slideToggle();
			$('#second_btc_right').slideToggle();
			$('#second_who_left').slideToggle();
			$('#second_who_right').slideToggle();
			$('.fourth_float').toggle('slide');
			$('.radisson_slider').toggle('slide');
			$('.image_viewer').hide();
			$('.first_arrows').hide();
			$('.second_arrows').hide();
			$('.content_load').hide();
			$('#notification').hide();
			jQuery(window).load(function () {
				$('#load').fadeOut("fast");
				$('.building_slide').addClass('move');
			});
			 $("#example10").zAccordion({
				width:100,
				speed: 1000,
				slideClass: "slider",
				slideWidth:70	,
				height: 100
			});
			$("#example11").zAccordion({
				width:100,
				speed: 1000,
				slideClass: "slider",
				slideWidth:70	,
				height: 100
			});
			$("#radisson_slider").zAccordion({
				width:100,
				speed: 1000,
				slideClass: "slider",
				slideWidth:80	,
				height: 100
			});
			/* second page -- who click event */
			var second_who_status = 'deactive';
			$('#second_who').click(function(e){
				if(second_who_status == 'deactive'){
				$('#second_who_left').slideToggle(500);
				$('#second_who_right').slideToggle(500);
				$('#second_head_left').removeClass('active');
				$('#second_head_right').removeClass('deactive');
				$('#second_head_left').addClass('deactive');
				$('#second_head_right').addClass('active');
				second_who_status = 'active';
				$(this).text('Close X');
			} else if(second_who_status == 'active'){
				$('#second_who_left').slideToggle(500);
				$('#second_who_right').slideToggle(500);
				$('#second_head_left').removeClass('deactive');
				$('#second_head_right').removeClass('active');
				$('#second_head_left').addClass('active');
				$('#second_head_right').addClass('deactive');
				second_who_status = 'deactive';
				$(this).text('Who we are');
			}
			e.preventDefault();
			});

			$('#second_who_menu').click(function(e){
				if(second_who_status == 'deactive'){
				$('#second_menu_left').slideToggle(500);
				$('#second_menu_right').slideToggle(500);
				$('#second_who_left').slideToggle(500);
				$('#second_who_right').slideToggle(500);
				second_who_status = 'active';
				$('#bt-menu').removeClass('bt-menu-open');
				$("#second_who").text('Close X');
			}
			e.preventDefault();
			});

			/* second page -- btc click event */
			var second_btc_status = 'deactive';
			$('#second_btc').click(function(e){
				if(second_btc_status == 'deactive'){
				$('#second_btc_left').slideToggle(500);
				$('#second_btc_right').slideToggle(500);
				$('#second_head_left').removeClass('active');
				$('#second_head_right').removeClass('deactive');
				$('#second_head_left').addClass('deactive');
				$('#second_head_right').addClass('active');
				$(this).text('Close X');
				second_btc_status = 'active';
			} else if(second_btc_status == 'active'){
				$('#second_btc_left').slideToggle(500);
				$('#second_btc_right').slideToggle(500);
				$('#second_head_left').removeClass('deactive');
				$('#second_head_right').removeClass('active');
				$('#second_head_left').addClass('active');
				$('#second_head_right').addClass('deactive');
				$(this).text('Erbil Business and Trade Center');
				second_btc_status = 'deactive';
			}
			e.preventDefault();
			});
			$('#second_btc_menu').click(function(e){
				if(second_btc_status == 'deactive'){
				$('#second_menu_left').slideToggle(500);
				$('#second_menu_right').slideToggle(500);
				$('#second_btc_left').slideToggle(500);
				$('#second_btc_right').slideToggle(500);
				$('#bt-menu').removeClass('bt-menu-open');
				$('#second_btc').text('Close X');
				second_btc_status = 'active';
			}
			e.preventDefault();
			});
			/* move to slides */
			$('body #goto').click(function(e){
					var destination = $(this).attr('href');
				$('html, body').animate({
				    scrollTop: $(destination).offset().top
				}, 1500);
				e.preventDefault();
			});
			   $('#main-slider-next').click(function(e) {
		e.preventDefault();
        goto('#slide2', this);
		return false;
    }); 
			/* Slide Third_slide_float */
			$('#third_float').click(function(e){
				$('.radisson_slider').toggle('slide');
				$(this).hide();
				$('.first_arrows').show();
				e.preventDefault();
			});
			$('#third_float_hide').click(function(e){
				$('.radisson_slider').toggle('slide');
				$('.first_arrows').hide();
				$('#third_float').show();
				e.preventDefault();
			});
			$('#office_types_show').click(function(e){
				$('#office_types_content').slideToggle(500);
				e.preventDefault();
			});
			$('#office_types_hide').click(function(e){
				$('#office_types_content').fadeOut();
				e.preventDefault();
			});
			$('body #fourth_float').click(function(e){
				$('.fourth_float').toggle('slide');
				e.preventDefault();
			});
			$('body').on('keyup',function(evt) {
    			if (evt.keyCode == 27) {
       			$('body .image_viewer').fadeOut();
    		}
			});
			$('#ps_albums #view').click(function(e){
				var source = $(this).attr('href');
				$('#image_viewer1').html("<img src='" + source + "'/><a href='#' class='close_btn' id='close'></a>");
				$('#image_viewer1').toggle('slide');
				e.preventDefault();
			});
			$('#types #view').click(function(e){
				var source = $(this).attr('href');
				$('#image_viewer2').html("<img src='" + source + "'/><a href='#' class='close_btn' id='close'></a>");
				$('#image_viewer2').toggle('slide');
				e.preventDefault();
			});
			$( "body #close" ).live( "click", function(e) {
				var pa =$(this).parent();
				pa.toggle('slide');
			 	e.preventDefault();
			});
			$('.feature #feature_number').click(function(e){
				var no=$(this).attr('href');
				var options ={};
				$('#feature_loader').fadeOut(200);
				$('#feature_loader').text('');
				switch(no){
					case '1':
					$('#feature_loader').html("<p class='feature_title'>Multipurpose business offices </p>").fadeIn(500);
					break;
					case '2':
					$('#feature_loader').html("<p class='feature_title'> A five star hotel with 385 rooms. </p>").fadeIn(500);
					break;
					case '3':
					$('#feature_loader').html("<p class='feature_title'> it is surrounded by three former government departments which cause plenty of business   visitors to   </p>").fadeIn(500);
					break;
					case '4':
					$('#feature_loader').html("<p class='feature_title'>An excellent and  very-well strategic location of the project and Café Village particularly. </p>").fadeIn(500);
					break;
					case '5':
					$('#feature_loader').html("<p class='feature_title'> 2350 car parking.  </p>").fadeIn(500);
					break;
					case '6':
					$('#feature_loader').html("<p class='feature_title'>Global brands of restaurants.  </p>").fadeIn(500);
					break;
					case '7':
					$('#feature_loader').html("<p class='feature_title'> Full Safety & Security</p>").fadeIn(500);
					break;
					case '8':
					$('#feature_loader').html("<p class='feature_title'> Fire extinguishing systems  </p>").fadeIn(500);
					break;
					case '9':
					$('#feature_loader').html("<p class='feature_title'> Cafe village full management Co. </p>").fadeIn(500);
					break;
					case '10':
					$('#feature_loader').html("<p class='feature_title'>Café village Marketing Co.      </p>").fadeIn(500);
					break;
					case '11':
					$('#feature_loader').html("<p class='feature_title'> Administrative support </p>").fadeIn(500);
					break;	
					case '12':
					$('#feature_loader').html("<p class='feature_title'>Kitchen facilities & Stoess </p>").fadeIn(500);
					break;	
					case '13':
					$('#feature_loader').html("<p class='feature_title'>Modern interiors </p>").fadeIn(500);
					break;																	
					default:
					$('#feature_loader').html("<p class='feature_title'>Multipurpose business offices </p>").fadeIn(500);
					break;
				}
				e.preventDefault();
			});
			$('.ninth_slide #contact_form').submit(function(e) {
				$('body #submit').attr('disabled', 'disabled');
				$('body #submit').attr('value', 'Sending ....');
				$.ajax({
				url:$(this).attr('action'),
				data:$(this).serialize(),
				type:'POST',
				success:function(data){
				console.log(data);
				$('#notification').html(data).show();
				$('body #submit').attr('value', 'Send');
				$('body #submit').removeAttr('disabled');
				},
				error:function(data){
				console.log(data);
				$('#notification').html('happen some error during sending data').show();
				$('body #submit').attr('value', 'Send');
				$('body #submit').removeAttr('disabled');
				}
				});
				e.preventDefault(); //=== To Avoid Page Refresh and Fire the Event "Click"===
			});
			jQuery('.tabs .tab-links a').on('click', function(e)  {
				var currentAttrValue = jQuery(this).attr('href');

				// Show/Hide Tabs
				jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

				// Change/remove current tab to active
				jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

				e.preventDefault();
			});
			$('.slider1').bxSlider({
		    	slideWidth: 500,
		    	minSlides: 3,
		    	maxSlides: 3,
		    	slideMargin: 10
		    });

		});
	</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56019852-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
	</html>