/*
	Copyright 2018, Leeloo all right reserved
*/

var curNews= 1; //Pages en cours de lecture.
var allNews= [];
var lastNews= false;

const addNews= (a, b)=> {
	let hesTitle = a[b].title.toUpperCase();
	let hesDate = new Date(a[b].timestamp);
	hesDate= `Posté le ${hesDate.getFullYear()}-${hesDate.getMonth()}-${hesDate.getDate()}, par ${a[b].author}`;
	let hesContent= a[b].content;
	hesContent= /\*\*(.*?)\*\*/gi[Symbol.replace](hesContent, "<b>$1</b>");
	$("div.container > div.row > div.leftBlock > div.CNBlock").before($('<div/>', {
		'class': "news",
		'data-show': "true",
		'data-id': a[b].id,
		'html': [
			$('<div/>', {
				'class': 'title',
				'html': [
					$('<img/>', {'src': "//bubblehotel.fr/Leeloo/icon/notes.png"}),
					$('<h5/>', {'text': hesTitle}),
					$('<span/>', {'text': hesDate})
				]
			}), $('<div/>', {
				'class': 'content',
				'text': hesContent
			})
		]
	}));
}

const goToNews= ()=> {
	$('div.container > div.row > div.leftBlock > div.news').each((a,b)=> {
		$(b).attr('data-show', 'false');
	});
	if(!allNews[curNews-1]) {
		$.ajax({
			type: "GET",
			url: `${document.location.origin}/Leeloo/api/news/`,
			data: {a: "get", b: 4, c: curNews-1},
			success: (a)=> {
				allNews[curNews-1]= a;
				for(let b in a) {
					if($(`div.container > div.row > div.leftBlock > div.news[data-id="${a[b].id}"]`).length<1) {
						addNews(a, b);
					} else {
						$(`div.container > div.row > div.leftBlock > div.news[data-id="${a[b].id}"]`).attr('data-show', 'true');
					}
				}
				$("div.container > div.row > div.leftBlock > div.CNBlock > span.NewsPages").text(curNews);
				console.log(a.length);
				if(a.length<4) lastNews= true;
			}
		});
	} else {
		let HesNews = allNews[curNews-1];
		for(let idx in HesNews) {
			if($(`div.container > div.row > div.leftBlock > div.news[data-id="${HesNews[idx].id}"]`).length<1) {
				addNews(HesNews, idx);
			} else {
				$(`div.container > div.row > div.leftBlock > div.news[data-id="${HesNews[idx].id}"]`).attr('data-show', 'true');
			}
		}
		$("div.container > div.row > div.leftBlock > div.CNBlock > span.NewsPages").text(curNews);
	}
};

$("document").ready(()=> {
	goToNews();
	$("div.container > div.row > div.leftBlock > div.CNBlock > span.NewsRight").click(()=> {
		if(!lastNews||(curNews<allNews.length)) {
			curNews++;
			goToNews();
		}
	});
	$("div.container > div.row > div.leftBlock > div.CNBlock > span.NewsLeft").click(()=> {
		if(curNews>1) {
			curNews--;
			goToNews();
		}
	});
	$('header > div.hidden-xs > a').eq(0).attr('data-select', 'true');
});