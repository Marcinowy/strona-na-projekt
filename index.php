<html><head>
	<link href="style.css" rel="stylesheet" media="screen">
	<link rel="Shortcut icon" href="favicon.ico" /><title>Zadania maturalne</title>
</head><body>
	<script src="jquery-2.1.4.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$(".page").each(function() {
				$(".scroller").append("<div class=\"scroll_point\" data-id=\""+$(this).attr("id")+"\"></div>").find(".scroll_point").first().addClass("selected");
			});
			$(".scroller").on('click','.scroll_point',function() {
				id=$(this).attr("data-id");
				$("body").animate({scrollTop: $("#"+id).offset().top+"px"},800);
			});
			$(".arrow_container").click(function() {
				$("body").animate({scrollTop: $("#page2").offset().top+"px"},800);
			});
			$(window).scroll(function() {
				page=Math.round($(window).scrollTop()/window.innerHeight);
				$(".scroll_point").removeClass("selected");
				$(".scroll_point").eq(page).addClass("selected");
			});
		});
	</script>
	<div class="scroller_container"><div class="scroller"></div></div>
	<div class="page" id="page1">
		<div class="title">zadania maturalne</div>
		<div class="arrow_container"><div class="arrow_text">zobacz więcej</div><div class="arrow"></div></div>
	</div>
	<div class="page" id="page2">
		<div class="title">Przykładowe zadanie</div>
		<div class="content">Pewien oszust chce rozesłać wiadomości, podszywając się pod Jana Kowalskiego, ale nie zdołał wykraść żadnych należących do Jana haseł ani innych prywatnych informacji. Posiada jednak klucz publiczny Jana Kowalskiego, który ten udostępnił w sieci, a także znaleziony w internecie adres e-mail Jana. Może zatem:</div>
		<div class="content">1. zalożyć konto Jan Kowalski" w serwisie społecznościowym i stamtąd rozsylae wiadomości</div>
		<div class="content">2. na podstawie klucza publicznego Jana Kowalskiego szybko wygenerować je podpis cyfrowy</div>
		<div class="content">3. na podstawie klucza publicznego Jana Kowalskiego szybko obliczyć jego klucz prywatny</div>
		<div class="content">4. rozsylac listy elektroniezne, które w nagłówku od będą mialy adres e-mail Jana Kowalskiego,</div>
	</div>
	<div class="page" id="page3">
		<div class="title">Odpowiedzi</div>
		<?php
		$response=array(true,false,false,true);
		for ($i=0;$i<count($response);$i++) echo "<div class=\"content\">".($i+1).". ".($response[$i]?"Prawda":"Fałsz")."</div>";
		?>
	</div>
</body></html>