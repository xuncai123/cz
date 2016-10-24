<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="/10.22/Public/admin/assets/css/reset.css">
        <link rel="stylesheet" href="/10.22/Public/admin/assets/css/supersized.css">
        <link rel="stylesheet" href="/10.22/Public/admin/assets/css/style.css">
		<style type="text/css">
		.connect a.facebook { background: url(/10.22/Public/admin/assets/img/facebook.png) center center no-repeat; }
		.connect a.twitter { background: url(/10.22/Public/admin/assets/img/twitter.png) center center no-repeat; }
		#supersized li.image-loading { background:#111 url(/10.22/Public/admin/assets/img/progress.gif) no-repeat center center; width:100%; height:100%; }
    	#supersized-loader { position:absolute; top:50%; left:50%; z-index:0; width:60px; height:60px; margin:-30px 0 0 -30px; text-indent:-999em; background:url("/10.22/Public/admin/assets/img/progress.gif") no-repeat center center;}
		
		.connect a:hover { background-position: center bottom; }
		
		</style>
    </head>

    <body>

        <div class="page-container">
            <h1>慢充后台登录</h1>
            <form action="<?php echo U('Login/check');?>" method="post">
                <input type="text" name="username" class="username" placeholder="管理员名称" required>
                <input type="password" name="password" class="password" placeholder="管理员密码" required>
                <input type='text' name='verify' placeholder="验证码" required/>
                <img alt="" src="<?php echo U('Login/code');?>" onclick="this.src=this.src+'?c='+Math.random()"/>
                <button type="submit">登录</button>
            </form>          
        </div>
        <!-- Javascript -->
        <script src="/10.22/Public/admin/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/10.22/Public/admin/assets/js/supersized.3.2.7.min.js"></script>
        <script src="/10.22/Public/admin/assets/js/scripts.js"></script>
		<script type="text/javascript">
	function change(){
		window.location="<?php echo U('Login/index');?>/rand/"+Math.random();
	}
	jQuery(function($){

	    $.supersized({

	        // Functionality
	        slide_interval     : 4000,    // Length between transitions
	        transition         : 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
	        transition_speed   : 1000,    // Speed of transition
	        performance        : 1,    // 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)

	        // Size & Position
	        min_width          : 0,    // Min width allowed (in pixels)
	        min_height         : 0,    // Min height allowed (in pixels)
	        vertical_center    : 1,    // Vertically center background
	        horizontal_center  : 1,    // Horizontally center background
	        fit_always         : 0,    // Image will never exceed browser width or height (Ignores min. dimensions)
	        fit_portrait       : 1,    // Portrait images will not exceed browser height
	        fit_landscape      : 0,    // Landscape images will not exceed browser width

	        // Components
	        slide_links        : 'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
	        slides             : [    // Slideshow Images
	                                 {image : '/10.22/Public/admin/assets/img/backgrounds/1.jpg'},
	                                 {image : '/10.22/Public/admin/assets/img/backgrounds/2.jpg'},
	                                 {image : '/10.22/Public/admin/assets/img/backgrounds/3.jpg'}
	                             ]
	    });
	});   
</script>
    </body>

</html>