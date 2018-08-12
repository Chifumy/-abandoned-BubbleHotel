<?php
	$reply=false;
	header('Content-Type: application/json');
	
	$dbFictive = array(
		array(
			'id'=> "9",
			'author'=> "Leeloo",
			'title'=> "Qu'est-ce que le Lorem Ipsum?",
			'content'=> "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.",
			'timestamp'=> "2018-08-11 14:36:43"
		), array(
			'id'=> "8",
			'author'=> "Night",
			'title'=> "AFK",
			'content'=> "AFK jusqu'à septembre!",
			'timestamp'=> "2018-08-11 14:39:52"
		), array(
			'id'=> "7",
			'author'=> "Matteoni",
			'title'=> "Yo",
			'content'=> "..play!",
			'timestamp'=> "2018-08-10 15:36:03"
		), array(
			'id'=> "6",
			'author'=> "Leeloo",
			'title'=> "c pa moa",
			'content'=> "Je nie toute responsabilité dans la précédente news :3",
			'timestamp'=> "2018-08-10 15:35:05"
		), array(
			'id'=> "5",
			'author'=> "Alldaylong",
			'title'=> "King",
			'content'=> "Mouah ah ah ah! Je suis le king du kong!",
			'timestamp'=> "2018-08-10 15:31:15"
		), array(
			'id'=> "4",
			'author'=> "5imik",
			'title'=> "News de test",
			'content'=> "",
			'timestamp'=> "2018-08-10 15:29:28"
		), array(
			'id'=> "3",
			'author'=> "CryO",
			'title'=> "News De test!",
			'content'=> "Et encore une !",
			'timestamp'=> "2018-08-10 15:27:42"
		), array(
			'id'=> "2",
			'author'=> "Leeloo",
			'title'=> "Hey!",
			'content'=> "Coucou tout le monde, c'est une autres news",
			'timestamp'=> "2018-08-10 15:25:26"
		), array(
			'id'=> "1",
			'author'=> "Leeloo",
			'title'=> "Hey!",
			'content'=> "La premières news du site !!",
			'timestamp'=> "2018-08-10 15:25:17"
		)
	);

	if(isset($_GET['a'])&&isset($_GET['b'])&&isset($_GET['c'])&&$_GET['a']=="get") {
		$reply=true;
		$number= intval($_GET['b']);
		$multiplicateur= intval($_GET['c']);
		$start= $number*$multiplicateur;
		$stop= $start+$number;
		foreach($dbFictive as $key => $res) {
			$id= intval($key);
			if($id>=$start&&$id<$stop) $rep[]= $res;
		}
		printf(json_encode($rep));
		//echo "start at ".$start." and stop at ".$stop." !";
	}

	if($reply==false) echo '{"error": "Bad request"}';
?>
