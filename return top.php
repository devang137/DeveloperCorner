<!DOCTYPE html>
<html>
<head>
	<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style type="text/css">
		#return-to-top {
		    position: fixed;
		    bottom: 20px;
		    right: 20px;
		    background: rgb(0, 0, 0);
		    background: rgba(0, 0, 0, 0.7);
		    width: 50px;
		    height: 50px;
		    display: block;
		    text-decoration: none;
			    -webkit-border-radius: 35px;
			    -moz-border-radius: 35px;
		    border-radius: 35px;
		    display: none;
			    -webkit-transition: all 0.3s linear;
			    -moz-transition: all 0.3s ease;
			    -ms-transition: all 0.3s ease;
			    -o-transition: all 0.3s ease;	
		    transition: all 0.3s ease;
		    z-index: 1;
		}
		#return-to-top i {
		    color: #fff;
		    margin: 0;
		    position: relative;
		    left: 16px;
		    top: 13px;
		    font-size: 19px;
			    -webkit-transition: all 0.3s ease;
			    -moz-transition: all 0.3s ease;
			    -ms-transition: all 0.3s ease;
			    -o-transition: all 0.3s ease;
		    transition: all 0.3s ease;
		}
		#return-to-top:hover {
		    background: rgba(0, 0, 0, 0.9);
		}
		#return-to-top:hover i {
		    color: #fff;
		    top: 5px;
		}
	</style>
</head>
<body>
	<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
</div>
	<script type="text/javascript">
		// ===== Scroll to Top ==== 
			$(window).scroll(function() {
			    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
			        $('#return-to-top').fadeIn(200);    // Fade in the arrow
			    } else {
			        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
			    }
			});
			$('#return-to-top').click(function() {      // When arrow is clicked
			    $('body,html').animate({
			        scrollTop : 0                       // Scroll to top of body
			    }, 500);
			});
	</script>
</body>
</html>
