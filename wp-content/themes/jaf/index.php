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
	
	<?php /* For HTML5 with old browsers */ ?>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<script type="text/javascript">

/*I get the language from the URL*/
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

    //Uncomment the 3 lines below to pull the images in random order
    //var $sibs  = $active.siblings();
    //var rndNum = Math.floor(Math.random() * $sibs.length );
    //var $next  = $( $sibs[ rndNum ] );

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
	    	<?php //do_action('icl_language_selector'); //WPML?>
	    	<!--Sidebar-->
	    	<div style="float:right;">
	    		<?php echo qtrans_generateLanguageSelectCode('image'); ?>
	    		<?php //if (function_exists('dynamic_sidebar')) dynamic_sidebar('translator'); ?>
	    	</div>
	    	<div style="float:right;">
	    		<br/><img id="imgLanguages" src="<?php bloginfo('template_directory');?>/pic/flags/imgLanguages.jpg" alt="Languages" style="float: right;">
	    	</div>
	    </div>
	    <div id="btn">
			
			<?php  //I get the language and the translations file.  I cannnot use $_GET becouse of the version of the server.
				if ($HTTP_GET_VARS["lang"]=="en"){$strLanguage = "en_gb/";}
				else if ($HTTP_GET_VARS["lang"]=="zh"){$strLanguage = "zh_cn/";}
				else if ($HTTP_GET_VARS["lang"]=="tw"){$strLanguage = "zh_tw/";}
				
				$strLang = substr($strLanguage, 0, 5);
				if ($strLang == ""){$strLang = "ja_jp";}
				
				$strPathLang = "&lang=".$HTTP_GET_VARS["lang"];
				if ($strPathLang == "&lang="){$strPathLang = "";}
				
				include_once "translations/{$strLang}.php";
			?>
			
			<!--Cambiar tras la migracion-->
			<img src="<?php bloginfo('template_directory');?>/pic/top/logo.png" alt="トップページ"><img src="<?php echo(bloginfo('template_directory').'/pic/top/'.$strLanguage.'01_1.png');?>" alt="J&F Plaza">
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
		<table style="width: 100%;">
			<tr>
				<td>
					<table style="width: 100%; border-collapse: collapse; border: none;">
						<tr>
							<td class="left_news_title" style="background-color: #ce492a;"><?php echo PROPERTY_INFORMATION;?> | <?php echo TOKYO_AREA;?></td>
							<td class="center_news_title" style="background-color: #ce492a;">&nbsp;</td>
							<td class="right_news_title" style="background-color: #ce492a;"><a href="http://jafnet.co.jp/wordpress/?page_id=631">MORE <img class="plus" src="<?php bloginfo('template_directory');?>/pic/content/more.png" alt="J&F Plaza"></a></td>
						</tr>
						<tr style="border-top: 3px #EEEEEE solid; border-bottom: 17px #EEEEEE solid; background-color: #FFFFFF;">
							<!--I show the news-->
							<?php if ( have_posts() ) : ?>
			 					<section>
			 						<?php $objPosts = new WP_Query(array('post_count' => '3', 'posts_per_page' => '3', 'category__and' => array( 3, 7 ))); //Tokyo?>
			 						
			 						<?php while ($objPosts->have_posts() ) : $objPosts->the_post(); ?>
			 							<td style="width: 33%;">
								    		<article class="<?php post_class();?>">
								    			<?php the_content(); ?>
								    		</article>
							    		</td>
									<?php endwhile;?>
								</section>
							<?php else : ?>
								<section>
									<td><p>No content.</p></td>
								</section>
							<?php endif; ?>
						</tr>
						<tr>
							<td class="left_news_title" style="background-color: #ce492a;"><?php echo PROPERTY_INFORMATION;?> | <?php echo METROPOLIS_AREA;?></td>
							<td class="center_news_title" style="background-color: #ce492a;">&nbsp;</td>
							<td class="right_news_title" style="background-color: #ce492a;"><a href="http://jafnet.co.jp/wordpress/?page_id=639">MORE <img class="plus" src="<?php bloginfo('template_directory');?>/pic/content/more.png" alt="J&F Plaza"></a></td>
						</tr>
						<tr style="border-top: 3px #EEEEEE solid; border-bottom: 17px #EEEEEE solid; background-color: #FFFFFF;">
							<?php if ( have_posts() ) : ?>
			 					<section>
			 						<?php $objPosts = new WP_Query(array('posts_per_page' => '3', 'category__and' => array( 4, 7 ))); //Metropolis?>
			 						<?php while ($objPosts->have_posts() ) : $objPosts->the_post(); ?>
			 							<td>
								    		<article class="<?php post_class();?>">
								    			<?php the_content(); ?>
								    		</article>
							    		</td>
									<?php endwhile;?>
								</section>
							<?php else : ?>
								<section>
									<td><p>No content.</p></td>
								</section>
							<?php endif; ?>
						</tr>
						<tr>
							<td class="left_news_title" style="background-color: #ce492a;"><?php echo PROPERTY_INFORMATION;?> | <?php echo OTHER_AREAS;?></td>
							<td class="center_news_title" style="background-color: #ce492a;">&nbsp;</td>
							<td class="right_news_title" style="background-color: #ce492a;"><a href="http://jafnet.co.jp/wordpress/?page_id=647">MORE <img class="plus" src="<?php bloginfo('template_directory');?>/pic/content/more.png" alt="J&F Plaza"></a></td>
						</tr>
						<tr style="border-top: 3px #EEEEEE solid; border-bottom: 17px #EEEEEE solid; background-color: #FFFFFF;">
							<?php if ( have_posts() ) : ?>
			 					<section>
			 						<?php $objPosts = new WP_Query(array('posts_per_page' => '3', 'category__and' => array( 5, 7 ))); //Other?>
			 						<?php while ($objPosts->have_posts() ) : $objPosts->the_post(); ?>
			 							<td>
								    		<article class="<?php post_class();?>">
								    			<?php the_content(); ?>
								    		</article>
							    		</td>
									<?php endwhile;?>
								</section>
							<?php else : ?>
								<section>
									<td><p>No content.</p></td>
								</section>
							<?php endif; ?>
						</tr>
					</table>
				</td>
				<td style="width: 260px;">		
					<table style="width: 100%; border-collapse: collapse; border: none;">
						<tr>
							<td class="left_news_title"><?php echo PROPERTY_INFORMATION_ABR;?></td>
							<td class="right_news_title"><a href="http://jafnet.co.jp/wordpress/?page_id=655">MORE <img class="plus" src="<?php bloginfo('template_directory');?>/pic/content/more.png" alt="J&F Plaza"></a></td>
						</tr>
						<!--I show the news-->
						<?php if ( have_posts() ) : ?>
		 					<section>
		 						<?php $objPosts = new WP_Query(array('posts_per_page' => '8', 'cat' => '7,-3,-4,-5')); //News?>
		 						<?php while ($objPosts->have_posts() ) : $objPosts->the_post(); ?>
						    		<article class="<?php post_class();?>">
						    			<?php
										the_content(); ?>
						    		</article>
								<?php endwhile;?>
							</section>
						<?php else : ?>
							<section>
								<p>No content.</p>
							</section>
						<?php endif; ?>
						<table style="width: 100%; border-collapse: collapse; border: none; margin-top: 10px;">
							<tr>
								<td class="left_news_title"><?php echo CONTACT;?></td>
							</tr>
							<tr style="height: 33px;">
								<td class="news_td"><img class="plus" src="<?php bloginfo('template_directory');?>/pic/content/phone.png" alt="J&F Plaza"> 03-6455-0360</td>
							</tr>
							<tr style="height: 33px;">
								<td class="news_td"><a style="color: #000000;" href="mailto:info@jafplaza.com"><img class="plus" src="<?php bloginfo('template_directory');?>/pic/content/mail.png" alt="J&F Plaza"> info@jafplaza.com</a></td>
							</tr>
						</table>
					</table>
				</td>
			</tr>
		</table>
	  	<div id="footer-container" class="footer-container">
		  	<div id="footer-main" class="footer-main">
				<img style="float: left;" alt="J&F Plaza" src="<?php bloginfo('template_directory');?>/pic/footer/footerlogo.png" width="220" height="50" >
				<p><?php echo ADDRESS;?> <img alt="J&F Plaza" src="<?php bloginfo('template_directory');?>/pic/footer/maps_logo.png"></p><p>TEL: (+81) 03-6455-0360    FAX: (+81) 03-6455-0360</p><p>Copyright (C) 2001 J&F Plaza Co., Ltd. All Rights Reserved.</p>
		  	</div>
	  	</div>
	</div>
</body>
</html>