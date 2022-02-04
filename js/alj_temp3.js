
var search_var=document.getElementById('search_id123');
var search_place_var=document.getElementById('search_place');

var move_to_var=document.getElementById('move_to');

var share_icon5_var =document.getElementById('share_icon5');
var face5_var=document.getElementById('face5');
var twitter5_var =document.getElementById('twitter5');

search_var.onclick=function (){
	
	search_place_var.classList.toggle('search_field_show');
	 search_field.focus();
}


share_icon5_var.onclick=function (){
	console.log('ddd');
	face5_var.classList.toggle('search_field_show');
twitter5_var.classList.toggle('search_field_show');
	
}


window.onscroll=function(){
	if (window.scrollY>=114) {
	move_to_var.style.display="block";	
	}
	else {
	move_to_var.style.display="none";		
	}
}

move_to_var.onclick=function(){

	window.scrollTo({
		top:0,
		left:0,
	behavior:"smooth" 	
	})
}
 