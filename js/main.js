// JavaScript Document

/*

window.alert('ssss');
console.log("ddd");
document.write('samer tawil');


var aa=typeof(10);
console.log(aa);

console.log(typeof("samer")); // example of fun typeof

 var object_var ={name:"samer"}; // object
 var araay_var =["samer",30]; //araay
console.log(araay_var);

window.onload function(){
	
	console.log(aa);
}

window.alert('hello');
console.log("hello");
document.write('hello');

let name="samer \"isam\" tawil ";

let name="samer";
let last_name="tawil";
console.log(name+last_name);

let name="samer";
console.log(name[0]);


let name="samer";
console.log(name.length);

console.log(name.length-1);

console.log(name[name.length-1]);

console.log(name.charAt(0));

console.log(name.toUpperCase());

console.log(name.toLowerCase());
 
console.log(name.trim());

console.log(name.substring(0,3));
 
console.log(name.substr(0,2));

console.log( name.includes("M") ) ;

console.log( name.startsWith('sa'));

console.log(name.endsWith('r'));

console.log(name.indexOf('er'));

console.log(name.lastIndexOf('er'));

console.log(name.split());

 count=Number(count);
 
count=parseInt(count);

 count=parseFloat(count);
 
 console.log(Number.isInteger(count));
 
 count=Math.round(count);
 
 count=Math.ceil(count);
 
 count_var=Math.max(count,count1,count2);

console.log( (count_var));

count_var=Math.min(count,count1,count2);

console.log( (count_var));

 let random_value =(Math.random()*2).toFixed();
 
 if (count1==20){ 

console.log('age 20');
	
	}
else if (count1==21) {
		console.log('age 21');
	}
else {
	console.log('no age');
}


names.push(50);
names.unshift(10,20);
names.pop();
names.shift();

console.log(names[0]);
console.log(names[names.length-1]);

let names=['samer',20,'tawil',"samer 1"];
let names2=['moh',30];
let newnames=names.concat(names2);
 
let newnames=names.splice(0,3)

 
let newnames=names.slice(0,3)

 
for( let i=0 ;i<=(names.length-1); i++;){
	console.log(names[i]);

}

for( let i=0 ;i<=(names.length-1) ; i++ ){
	console.log(names[i]+i);
}

 function  printname(...numbers){
	 let result=0;
 for(let i=0;i<=(numbers.length-1);i++){
	 
 
   result=result+numbers[i];
	
 }

 
 
 return result ;

	}
	
let sum_result=printname(10,20,30);


 console.log(sum_result);
 
 
 ---
 
 
 
 document.getElementById('p1')
 
var ele =document.getElementsByClassName('p1');

console.log(ele[0]);

document.querySelector()

document.querySelectorAll()


let newitem=document.getElementById('img_id');
var item_property=img_id.title;
var item_property=img_id.src;
console.log(item_property)

------------
let newitem=document.getElementById('img_id');

 img_id.setAttribute('class','newclass');

 
console.log(newitem)

let newitem=document.getElementById('img_id');

 img_id.title='dd';

let newitem1=img_id.title

console.log(newitem1)

----
document.getElementById('img_id');
let newitem= img_id.classList.contains('class1');
console.log(newitem);

---------------

img_id.classList.add('class3');
console.log(document.getElementById('img_id'));

------------
p1.classList.toggle('class3');
newelemnt=document.getElementById('p1');
console.log(newelemnt)

-----------
var text_var=document.getElementById('p1');

text_var=text_var.textContent;

console.log(text_var);

----------------

let text1=  document.getElementById('p1');

text1.onclick =  function() {
	text1.classList.toggle('class3');
	console.log('hello')
}

-------------------------------------
let text1=  document.getElementById('p1');
 

text1.ondblclick =  function() {
	text1.classList.toggle('class3');
	console.log('hello')
}
-----------------
 let text_var= document.getElementById('text_id');
   let p_var=  document.getElementById('p_id');

text_var.onkeyup=function   (){
	p_var.textContent=  text_var.value
	console.log( text_var.value);
}

-----------------------------------
 var imput_var= document.getElementById('imput_id');
 var select_var=document.getElementById('select_id');
var p_var =document.getElementById('p_id');

 select_var.onchange = function () {
 
	  p_var.textContent  =(imput_var.value*select_var.value).toFixed(); 
	
}
    
imput_var.onkeyup = function () {
 
	  p_var.textContent  =(imput_var.value*select_var.value) ; 
 
	
}
----------------------------

  var imput_var= document.getElementById('imput_id');
 var select_var=document.getElementById('select_id');
var p_var =document.getElementById('p_id');

function exchange(){
	 p_var.textContent  =(imput_var.value*select_var.value).toFixed(); 
	
}

 select_var.onchange= function (){
	 exchange();
 }
  imput_var.onkeyup = function () {
 
	 exchange();
 	
} 
   
   --------------------
    var btn_var=document.getElementById('btn_id');

btn_var.onclick= function (){

	window.open('http://localhost:82/samer_code/temp_yassen.html','_blank','width=400 , height=200 , left=50 , top=100')
}

 ---------------------
 
  var btn_var=document.getElementById('btn_id');

btn_var.onclick= function (){

	 window.scrollTo({
		 top:0,
		 left:0,
		 behavior:"smooth"
	 });
}

-------------------------
 var btn_var=document.getElementById('btn_id');

btn_var.onclick= function (){

	 window.scrollTo(0,0);
}

--------------------
var navclor=document.getElementById('id1');
		window.onscroll=function () {

		if (window.scrollY>=114) {
		 	console.log(navclor); 
		  navclor.style.backgroundColor="white";   
		} else {
			 navclor.style.backgroundColor="transparent";   
		}
		
		}
------------------------------

var navclor=document.getElementById('id1');
		var govar=document.getElementById('go_id');
		
		window.onscroll=function () {
 
		if (window.scrollY>=114) {
		 
		  navclor.style.backgroundColor="white"; 
		 
		} else {
			 navclor.style.backgroundColor="transparent";   
		} 
 
		if (window.scrollY>=300) {
			govar.style.display="block";
		}
		else if (window.scrollY<=300) { 
				govar.style.display=null;	
		}	
	 
		}
		-----------------
	let namevar1=document.getElementsByClassName('p1');
		namevar1=(namevar1[0]).textContent;
		 console.log(namevar1)  
	
  let namevar2 =namevar1;
		namevar1[1].textContent=''; 
		 
 
	let i=0;
	let id =window.setInterval(function(){
	 
		namevar1.textContent  = namevar2[i];
	 console.log(namevar2[i])  
		if (namevar2.length-1 == i) { 
			console.log('11111111111')    
		window.clearInterval(id);
		}
		i++;
	}, 200) 
---------------------------
let preview_var = document.getElementById('preview');


window.setInterval(function (){
let info =new Date();
let h=info.getHours();
let m=info.getMinutes();
let s=info.getSeconds();	

	if (h<10){ h='0'+h};
		if (m<10){ m='0'+m};
		if (s<10){ s='0'+s};
preview_var.textContent=h+':'+m+':'+s;	

},1000);
 
 --------------------------

 */










