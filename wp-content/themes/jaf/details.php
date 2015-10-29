<?php
/*
Template Name: Details
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
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><!--Pictures' visualizer-->
	<!--/Scripts-->
	
	<?php /* HTML5 optimization with old browsers */ ?>
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

//For showing or hiding the pictures
function ShowPictures(){
	var objRbt=document.getElementsByName("tab-group");
	var divContent = document.querySelector('#content');
	if (objRbt[1].checked){	//Second tab
		document.getElementById('images_container').style.display = 'block';
		objContent.setAttribute("opacity", 0);
	}else{
		document.getElementById('images_container').style.display = 'none';
		objContent.setAttribute("opacity", 1);
	}
}

function LoadPicture(Path, Description){
	document.getElementById('imgMain').src = Path;
	document.getElementById('txtMain').value = Description;
}

</script>

<?php
	/*For possible plugins*/
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
	    		<br><img id="imgLanguages" src="<?php bloginfo('template_directory');?>/pic/flags/imgLanguages.jpg" alt="Languages" style="float: right;">
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
				
				$intPost = $HTTP_GET_VARS["post"];

				//For tests
				//mysql_query("INSERT INTO auxPath (pat_id, pat_others) VALUES ('1', '".$arrPath["house"]."');", $link);
			?>
	    
			<a href="http://jafplaza.com" class="top_btn"><img src="<?php bloginfo('template_directory');?>/pic/top/logo.png" alt="トップページ"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'01_0.png');?>" alt="J&F Plaza"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=32<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'02_0.png');?>" alt="マンション"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=177<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'03_0.png');?>" alt="戸建て"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=186<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'04_0.png');?>" alt="ビル"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=195<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'05_0.png');?>" alt="土地"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=208<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'06_0.png');?>" alt="購入の流れ"></a>
			<a href="http://jafnet.co.jp/wordpress/?page_id=210<?php echo $strPathLang;?>" class="top_btn"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'07_0.png');?>" alt="会社概要"></a>
	    </div>
	  	<div id="slideshow">
			<img src="<?php bloginfo('template_directory');?>/ad01.png" alt="J&F Plaza" class="active">
			<img src="<?php bloginfo('template_directory');?>/ad02.png" alt="J&F Plaza">
			<img src="<?php bloginfo('template_directory');?>/ad03.png" alt="J&F Plaza">
	  	</div>
	  		
		<!--Container-->
		<div id="container">
			<form name="form">
				<input id="tab-1" type="radio" name="tab-group" checked="checked" onclick="ShowPictures();">
				<label for="tab-1"><?echo DETAIL_INFORMATION;?></label>
				<div class="empty">&nbsp;</div>
				<input id="tab-2" type="radio" name="tab-group" onclick="ShowPictures();">
				<label for="tab-2"><?echo PROPERTY_PICTURES;?></label>
			</form>
			<hr class="blue_bar">
			<div id="content" style="height: 660px;">
				<div id="content-1" style="opacity: 1;">
					<?php
						if ($HTTP_GET_VARS["lang"]=="en"){$strLangQ = "en";}
						else if ($HTTP_GET_VARS["lang"]=="zh"){$strLangQ = "zh";}
						else if ($HTTP_GET_VARS["lang"]=="tw"){$strLangQ = "zh";}
						else {$strLangQ = "ja";}
					
						$objPost = get_post($intPost);
						
						$objContent = qtrans_use($strLangQ, $objPost->post_content,false); 
						echo "$objContent";
					?>
				</div>
				<div id="content-2">
					<!--Nothing-->
				</div>
			</div>
			
			<section id="images_container" class="image-gallery group">
				<div id="pictures" style="float: left; width: 100%;">
					<?php
																	
						//Cambiar tras la migracion
						$strPath = $_SERVER['DOCUMENT_ROOT']."/wordpress/wp-content/themes/jaf/details/".$intPost."/";	//Modificar tras la migracion
						
						$intPicture = 0;
						$arrFiles = scandir($strPath);
						foreach ($arrFiles as &$objFile) {
							if($objFile!="."&&$objFile!=".."){
								if($intPicture==0){
									echo "
									<figure tabindex='0' class='main_picture'>
										<center>
											<img id='imgMain' alt='J&F Plaza' src='".get_bloginfo('template_directory')."/details/".$intPost."/".$objFile."'>
											<input type='text' id='txtMain' value='".substr($objFile,0,strlen($objFile)-4)."' disabled='disabled' readonly='readonly' style='visibility: visible;'>
										</center>
									</figure>
									<div class='empty'>&nbsp;</div>";
								}
								$intPicture = $intPicture + 1;
								echo "
									<figure tabindex='".$intPicture."'>
										<img alt='J&F Plaza' src='".get_bloginfo('template_directory')."/details/".$intPost."/".$objFile."' onclick=\"LoadPicture('".get_bloginfo('template_directory')."/details/".$intPost."/".$objFile."','".substr($objFile,0,strlen($objFile)-4)."')\">
										<figcaption>".substr($objFile,0,strlen($objFile)-4)."</figcaption>
									</figure>";
							}
						}
					?>
				</div>
			</section>
			
		</div>
	</div>
</body>
</html>