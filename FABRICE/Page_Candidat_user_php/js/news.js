$(function(){
	setInterval(chargerNews,5000);
}
);

var dernier_id;
function setId(id){
	dernier_id=id;
}

function chargerNews(){
	$.ajax({
		url: 'news.php'
	})
}