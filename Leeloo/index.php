<html xmlns:og="http://ogp.me/ns#">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta property="og:site_name" content="Bubble Hotel"/>
		<meta property="og:description" content="Ma zone de test BubbleHotel, attention webpage carnivore!"/>
		<meta property="og:title" content="@Leeloo#9187"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="//bubblehotel.fr/Leeloo/"/>
		<meta property="og:image" content="//bubblehotel.fr/Leeloo/favicon.png"/>
		<link href="//bubblehotel.fr/Leeloo/favicon.png" rel="icon" type="image/png"/>
		<title>Leeloo</title>
		<script src="//bubblehotel.fr/Leeloo/js/JQy.min.js"></script>
		<link href="//bubblehotel.fr/Leeloo/css/BSp.min.css" rel="stylesheet">
		<link href="//bubblehotel.fr/Leeloo/css/basic.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Gudea|Libre+Franklin" rel="stylesheet">
	</head>
	<body>
		<div style="width:100%">
			<header>
				<img src="//bubblehotel.fr/Leeloo/logo.png">
				<div class="hidden-xs">
					<a href="//bubblehotel.fr/Leeloo/">Accueil</a>
					<a href="//bubblehotel.fr/Leeloo/forum/">Forum</a>
					<a href="//bubblehotel.fr/Leeloo/news/">News</a>
					<a href="//bubblehotel.fr/Leeloo/social/">Social</a>
					<a href="//bubblehotel.fr/Leeloo/store/">Boutique</a>
				</div>
				<div class="show-xs"></div>
			</header>
		</div>
		<div class="hidden-xs separator"></div>

<?php

	$path= $_SERVER["REQUEST_URI"];
	$path= preg_split("/\//", $path);
	$path= array_filter($path, function($a) {return (strlen($a)>1);});
	$count= 0;
	foreach($path as $b) {
		if($count++<1) {$newPath[]= "../Leeloo/wep/";}
		else {$newPath[]= $b.".";}
	}
	if(count($path)<2) $newPath[]= "index.php";
	else $newPath[]= "php";
	$newPath= join('', $newPath);
	include($newPath);

?>


		<div class="hidden-xs separator"></div>
		<div style="width:100%">
			<footer>
				<div class="link">
					<a href="//www.facebook.com/Bubble-Hotel-2255305367817475"><img src="//bubblehotel.fr/Leeloo/icon/facebook.png"></a>
					<a href="//twitter.com/BubbleHotel2"><img src="//bubblehotel.fr/Leeloo/icon/twitter.png"></a>
					<a href="//discord.gg/z93Kmam"><img src="//bubblehotel.fr/Leeloo/icon/discord.png"></a>
				</div>
				<p class="hidden-xs">@2018 Bubble Hotel. Tous droits réservés. <a href="#" onclick="return false;">Conditions d'utilisation</a> - <a href="#" onclick="return false;">Politique de confidentialité</a> - <a href="#" onclick="return false;">Conditions Générales de Vente</a> - <a href="#" onclick="return false;">Mentions Légales</a></p>
				<p class="show-xs">@2018 Bubble Hotel. Tous droits réservés. ~ <a href="//bubblehotel.fr/Leeloo/CGU/">CGU</a></p>
			</footer>
		</div>

<?php

	$path2= $_SERVER["REQUEST_URI"];
	$path2= preg_split("/\//", $path);
	$path2= array_filter($path, function($a2) {return (strlen($a2)>1);});
	$count2= 0;
	foreach($path2 as $b2) {
		if($count2++>0) {$newPath2[]= $b2.".";}
	}
	if(count($path2)<2) $newPath2[]= "index.";
	$newPath2= join('', $newPath2);
		echo <<<END
		<script src="//bubblehotel.fr/Leeloo/js/{$newPath2}js"></script>
		<link href="//bubblehotel.fr/Leeloo/css/{$newPath2}css" rel="stylesheet">
END;

?>

	</body>
</html>