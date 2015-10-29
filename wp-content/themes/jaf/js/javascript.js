<script type="text/javascript">
$(document).ready(function(){
    $(".language_btn").hover(function(){
        var index = $(this).index(".language_btn");
        if(index == 0){
            $(this).find("img").attr("src", "./pic/bar/tc_1.png");
        }else if(index == 1){
            $(this).find("img").attr("src", "./pic/bar/sc_1.png");
        }
    }, function(){
        var index = $(this).index(".language_btn");
        if(index == 0){
            $(this).find("img").attr("src", "./pic/bar/tc_0.png");
        }else if(index == 1){
            $(this).find("img").attr("src", "./pic/bar/sc_0.png");
        }
    });
});
$(document).ready(function(){
    $(".top_btn").hover(function(){
        var index = $(this).index(".top_btn");
        if(index == 0){
            $(this).find("img").attr("src", "./pic/top/02_1.png");
        }else if(index == 1){
            $(this).find("img").attr("src", "./pic/top/03_1.png");
        }else if(index == 2){
            $(this).find("img").attr("src", "./pic/top/04_1.png");
        }else if(index == 3){
            $(this).find("img").attr("src", "./pic/top/05_1.png");
        }else if(index == 4){
            $(this).find("img").attr("src", "./pic/top/06_1.png");
        }else if(index == 5){
            $(this).find("img").attr("src", "./pic/top/07_1.png");
        }
    }, function(){
        var index = $(this).index(".top_btn");
        if(index == 0){
            $(this).find("img").attr("src", "./pic/top/02_0nl.png");
        }else if(index == 1){
            $(this).find("img").attr("src", "./pic/top/03_0.png");
        }else if(index == 2){
            $(this).find("img").attr("src", "./pic/top/04_0.png");
        }else if(index == 3){
            $(this).find("img").attr("src", "./pic/top/05_0.png");
        }else if(index == 4){
            $(this).find("img").attr("src", "./pic/top/06_0.png");
        }else if(index == 5){
            $(this).find("img").attr("src", "./pic/top/07_0.png");
        }
    });
});

$(function(){
	var $block = $('#abgne_fade_pic'), 
		$ad = $block.find('.ad'),
		showIndex = 0,			/* 預設要先顯示那一張*/
		fadeOutSpeed = 2000,	/* 淡出的速度 */
		fadeInSpeed = 3000,		/* 淡入的速度 */
		defaultZ = 10,			/* 預設的 z-index */
		isHover = false,
		timer, speed = 5000;	/* 計時器及輪播切換的速度 */
 
	/* 先把其它圖片的變成透明 */
	$ad.css({
		opacity: 0,
		zIndex: defaultZ - 1
	}).eq(showIndex).css({
		opacity: 1,
		zIndex: defaultZ
	});
 
	/* 組出右下的按鈕 */
	var str = '';
	for(var i=0;i<$ad.length;i++){
		str += '<a href="#">' + (i + 1) + '</a>';
	}
	var $controlA = $('#abgne_fade_pic').append($('<div class="control">' + str + '</div>').css('zIndex', defaultZ + 1)).find('.control a');
 
	/* 當按鈕被點選時 */
	/* 若要變成滑鼠滑入來切換時, 可以把 click 換成 mouseover */
	$controlA.click(function(){
		/* 取得目前點擊的號碼 */
		showIndex = $(this).text() * 1 - 1;
 
		/* 顯示相對應的區域並把其它區域變成透明 */
		$ad.eq(showIndex).stop().fadeTo(fadeInSpeed, 1, function(){
			if(!isHover){
				/* 啟動計時器 */
				timer = setTimeout(autoClick, speed + fadeInSpeed);
			}
		}).css('zIndex', defaultZ).siblings('a').stop().fadeTo(fadeOutSpeed, 0).css('zIndex', defaultZ - 1);
		/* 讓 a 加上 .on */
		$(this).addClass('on').siblings().removeClass('on');
 
		return false;
	}).focus(function(){
		$(this).blur();
	}).eq(showIndex).addClass('on');
 
	$ad.hover(function(){
		isHover = true;
		/* 停止計時器 */
		clearTimeout(timer);
	}, function(){
		isHover = false;
		/* 啟動計時器 */
		timer = setTimeout(autoClick, speed);
	})
 
	/* 自動點擊下一個 */
	function autoClick(){
		if(isHover) return;
		showIndex = (showIndex + 1) % $controlA.length;
		$controlA.eq(showIndex).click();
	}
 
	/* 啟動計時器 */
	timer = setTimeout(autoClick, speed);
});
</script>