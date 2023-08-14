<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name=”keywords” content=”映像制作,映像編集,撮影,企画,スタジオ”>
<meta name=”description” content=”渋谷区千駄ヶ谷にあるテレビ番組・CM・映画・WEBなどあらゆる媒体で映像制作を手がける企画・制作会社です。 HD編集・MA室を併設し、コストパフォーマンスに優れたクオリティーの高い作品を創ります。”>
<title>JINON ////// 映像に関わるすべてのことをワンストップで //////</title>
<link rel="stylesheet" type="text/css" href="css/jinon.css">
<link rel="stylesheet" href="mediabox/mediaboxAdv-Minimal.css" type="text/css" media="screen" />

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="mediabox/mootools-core-1.3.2.js" type="text/javascript"></script>
<script src="mediabox/mediaboxAdv.js" type="text/javascript"></script>
<script src="mediabox/Quickie.js" type="text/javascript"></script>

<script>// 画面リサイズ 読み込み時
$(document).ready(function(){
    var wH = $(window).height(); 
    var divH = $('div#home-top').innerHeight();
	var divH = $('div#home-bottom').innerHeight();
    if(wH > divH){
    	$('div#home-top').css('height',(wH-160)/2 +'px'); 
		$('div#home-bottom').css('height',(wH-160)/2 +'px');
    }
});
</script>
<script>// 画面リサイズ リアルタイム
$(window).resize(function(){
    var wH = $(window).height(); 
    var divH = $('div#home-top').innerHeight();
	var divH = $('div#home-bottom').innerHeight();
    if(wH > divH){
    	$('div#home-top').css('height',(wH-160)/2 +'px'); 
		$('div#home-bottom').css('height',(wH-160)/2 +'px');
    }
});
</script>

</head>
<body>




<div id="container_home">

	
		<?php include 'header.php'; ?>
        
	
    <div id="home-content">

			<div id="home-top">
            	<div id="home-box">
            	<div id="home-box1"><a href="video-production.php"><img src="img/home_vp.png" width="360" height="100"/></a></div>
                <div class="clear"></div>
                <div id="home-box2"></div>
                </div>
			</div>
            
            <div class="clear"></div>
            
            <div id="home-bottom">
            	<div id="home-box">
            		<div id="home-box1"><a href="island-studio.php"><img src="img/home_is.png" width="360" height="100"/></a></div>
                	<div class="clear"></div>
                	<div id="home-box2"><a href="island-studio.php#tg_editroom">EDIT ROOM</a> / 
                                    <a href="island-studio.php#tg_maroom">MA ROOM</a> / 
                                    <a href="island-studio.php#tg_CGOFF">COLOR GRADING + OFFLINE</a>
                                    
                    </div>
                </div>
			</div>
            
            <div class="clear"></div>

	


	</div><!-- end .content -->    

  	  <?php include 'footer.php'; ?>
    
</div><!-- end .container -->
</body>
</html>
