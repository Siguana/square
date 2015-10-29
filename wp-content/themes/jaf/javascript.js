<script type="text/javascript">

function SaveCookie(){
	
	alert ('Hola');
	
	var strLink[] = this.attributes.href.split('&');
	
	var strPage[] = strLink[0].split('=');
	var strHouse[] = strLink[1].split('=');
	
	document.cookie='page='+strPage[1];
	document.cookie='house='+strHouse[1];

	if (strLink.length==3){
	
		var strLang[] = strLink[2].split('=');
		
		document.cookie='lang='+strLang[1];
	}
}

</script>