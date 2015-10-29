<?php
/*
Template Name: Flows
*/
?>

<!DOCTYPE html>
<html> 
<head>
	<!-- METAS -->
	<meta charset="<?php bloginfo( 'charset' );?>" >
	<!-- /METAS -->
	
	<title><?php
		/*With this code we add to Wordpress a tittle that changes according to the place where we are in the website.
		You may use also bloginfo('name')
	    It shows in <title> tab the name of what you are seing about. This way is much more friendly for browsers
	    because it shows the information if every place you are.*/
	    global $page, $paged;
	    wp_title( '|', true, 'right' );
	    //It adds the name of the website.
	    bloginfo( 'name' );
	    //It adds the name of the website in the main page.
	    $site_description = get_bloginfo( 'description', 'display' );
	    if ( $site_description && ( is_home() || is_front_page() ) )
	    echo " | $site_description";
	    //If it is necessary, it adds the page number.
	    if ( $paged >= 2 || $page >= 2 )
	    echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	    ?>
	</title>
	
	<!-- CSS -->
	<link href='<?php bloginfo( 'stylesheet_url' ); ?>' rel="stylesheet">
	<!-- /CSS -->
	
	<!-- RSS & PINGBACKS -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<!-- /RSS & PINGBACKS -->
	
	<!--Scripts-->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/jquery-1.2.6.min.js"></script>
	<!--/Scripts-->
	
	<?php /* Para compatibilizar HTML5 con navegadores antiguos */ ?>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<script type="text/javascript">

function getLanguage(){
	
	var strLink = document.location.href;
	var strLanguage = '';

	if(strLink.indexOf('?lang=en')>0){
		strLanguage = 'en_gb';
	}
	return strLanguage;
}

$(document).ready(function(){

	var strLanguage = getLanguage() + '/';
	
    $(".top_btn").hover(function(){
        var index = $(this).index(".top_btn");
        if(index == 0){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "02_1.png");
        }else if(index == 1){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "03_1.png");
        }else if(index == 2){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "04_1.png");
        }else if(index == 3){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "05_1.png");
        }else if(index == 4){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "06_1.png");
        }else if(index == 5){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "07_1.png");
        }
    }, function(){
        var index = $(this).index(".top_btn");
        if(index == 0){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "02_0.png");
        }else if(index == 1){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "03_0.png");
        }else if(index == 2){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "04_0.png");
        }else if(index == 3){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "05_0.png");
        }else if(index == 4){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "06_0.png");
        }else if(index == 5){
            $(this).find("img").attr("src", "pic/top/" + strLanguage + "07_0.png");
        }
    });
});

function slideSwitch() {

    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>
	
	<?php
	    wp_head();
	?>

	<meta charset="UTF-8">
	<title>外国人向けアパート、マンションを運営している不動産会社の紹介/外国人, ハウス, アパート : J&amp;F NETWORKS</title>
	<meta name="Keywords" content="お部屋探し, アパート, 不動産会社, 外国人, 外人, マンション, ルームシェア,ルームメイト,シェアメイト,東京">
	<meta name="Description" content="アパート、マンションを探している外国人のための不動産会社検索サイト。">
	<meta name="robots" content="all">
	<meta name="language" content="japanese">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta name="google-site-verification" content="dS3bRyHN1N3BES6rZ0lDFHDk2lkkhQlxLhk9ZwzHeAs">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="style.css" media="screen">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
</head>

<body topmargin="0" <?php body_class(); ?>>
    <div id="wrapper">
	    <div id="header">
	    	<!--<?php do_action('icl_language_selector'); ?>
	    	<img id="imgLanguages" src="<?php bloginfo('template_directory');?>/pic/flags/imgLanguages.jpg" alt="Languages" style="float: right;">-->
	    	<div style="float:right;">
	    		<?php echo qtrans_generateLanguageSelectCode('image'); ?>
	    		<?php //if (function_exists('dynamic_sidebar')) dynamic_sidebar('translator'); ?>
	    	</div>
	    	<div style="float:right;">
	    		<br/><img id="imgLanguages" src="<?php bloginfo('template_directory');?>/pic/flags/imgLanguages.jpg" alt="Languages" style="float: right;">
	    	</div>
	    </div>
	    <div id="btn">
	    
			<?php  //I get the language and the translations file
				if ($HTTP_GET_VARS["lang"]=="en"){$strLanguage = "en_gb/";}
				else if ($HTTP_GET_VARS["lang"]=="zh"){$strLanguage = "zh_cn/";}
				else if ($HTTP_GET_VARS["lang"]=="tw"){$strLanguage = "zh_tw/";}
				
				$strLang = substr($strLanguage, 0, 5);
				if ($strLang == ""){$strLang = "ja_jp";}
				
				$strPathLang = "&lang=".$HTTP_GET_VARS["lang"];
				if ($strPathLang == "&lang="){$strPathLang = "";}
				
				include_once "translations/{$strLang}.php";
			?>
	    
			<a href="http://jafplaza.com" class="top_btn"><img src="<?php bloginfo('template_directory');?>/pic/top/logo.png" alt="トップページ"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'01_0.png');?>" alt="J&F Plaza"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=32<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'02_0.png');?>" alt="マンション"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=177<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'03_0.png');?>" alt="戸建て"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=186<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'04_0.png');?>" alt="ビル"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=195<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'05_0.png');?>" alt="土地"></a>
			<img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'06_0.png');?>" alt="購入の流れ">
			<a href="http://jafnet.co.jp/wordpress/?page_id=210<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'07_0.png');?>" alt="会社概要"></a>
	    </div>
	  	<div id="slideshow">
			<img src="<?php bloginfo('template_directory');?>/ad01.png" alt="J&F Plaza" class="active">
			<img src="<?php bloginfo('template_directory');?>/ad02.png" alt="J&F Plaza">
			<img src="<?php bloginfo('template_directory');?>/ad03.png" alt="J&F Plaza">
	  	</div>

		<div id="container" style="height: 220px;">
			<input id="tab-1" type="radio" name="tab-group" checked="checked">
			<label for="tab-1" style="width: 256px; text-align: left;">&nbsp;&nbsp;<?php echo BENEFITS_REAL_STATE; ?></label>
			<hr class="blue_bar">
			<div id="content" style="background-color: transparent;">
				<div id="content-1">
					<ol>
						<li>所有権が取得できる</li>
						<li>家賃の相場が安定している為、投資に向いている</li>
						<p>一旦入居者が入れば、入居後に部屋の賃料が大きく変動する事は殆ど無いない。その為、長期にわたり、安定的に収益を上げることができる。
但し、人気の無いエリアは人が借りない為、物件の所在地は物件を選ぶ重要な要素となる。</p>
						<li>不動産の市場が成熟している</li>
						<p>賃貸、売買などに関する法律が整備されている為、安心して取引が出来る。また、自己使用の為に購入した場合も、本国へ帰るとき、賃貸として貸し出す事が可能。その場合の管理会社の数も充実している。</p>
						<li>円安</li>
						<p>急激な円安により、多くの外国人が日本の不動産を購入し始めている。その為、現時点でも良い不動産は競争率が高く、次々に売れている。</p>
					</ol>
				</div>
			</div>
		</div>
		
		<div id="container_flows">
			<input id="tab-1-flows" type="radio" name="tab-group-flows" checked="checked">
			<label for="tab-1-flows" style="width: 256px; text-align: left;">&nbsp;&nbsp;<?php echo HOW_TO_PURCHASE; ?></label>
			<hr class="blue_bar">
			<div id="content-flows" style="background-color: transparent;">
				<div id="content-1-flows">
					<?php
				    	switch ($strLang){
				    		case "ja_jp":
								$strFlows = "flows_j";
				    			break;
				    		case "en_gb":
								$strFlows = "flows_e";
				    			break;
				    	}
					?>
					<img alt="J&F Plaza" src="<?php bloginfo('template_directory');?>/pic/content/<?php echo $strFlows; ?>.png">
				</div>
			</div>
		</div>
		
	  	<div id="footer-container" class="footer-container">
		  	<div id="footer-main" class="footer-main">
		  		<img style="float: left;" alt="J&F Plaza" src="<?php bloginfo('template_directory');?>/pic/footer/footerlogo.png" width="220" height="50" >
		  		<p>〒150-0043　<?php echo ADDRESS ?> <img alt="J&F Plaza" src="<?php bloginfo('template_directory');?>/pic/footer/maps_logo.png"></p><p>TEL: (+81) 03-6455-0360    FAX: (+81) 03-6455-0360</p><p>Copyright (C) 2001 J&F Plaza Co., Ltd. All Rights Reserved.</p>
		  	</div>
	  	</div>
	</div>
</body>
</html>