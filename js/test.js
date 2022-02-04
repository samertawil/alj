// let title_name = "El zero" , desp_name="El zero school" , date1="25/10";
// //  use 3 variable declarartion in one line

// let html_div_contain =` <div>
// <h3> ${title_name} </h3>
// <p> ${desp_name} </p>
// <span> ${date1} </span>

// </div>`;

//  document.write(html_div_contain.repeat(5)) ;

// let d="-100";
// let e="20";
// let f=30;
// let g=true;

// h=-d*+e;
// console.log (h);

// let a=100;

// console.log(a++);

// console.log(-(d))

// console.log((10103).toFixed());

// let a1=500;

// let myFriend=["samer","abed","moh",["sam1","sam2"]];

// let moh_index=myFriend.indexOf("moh")

// myFriend[moh_index]="ss";

// // console.log(myFriend);

// myFriend[3]="ddd"

// // console.log(myFriend)

//  for (let i=0;i<=myFriend.length ;i++) {
//    console.log(myFriend[i]);
//  }

//  let name1=[1,2,3,"samer","heshu"];
//  let name2_num=[];
//  let name3=[];
//  console.log(name1+name2_num+name3);

//  for (i=0;i<=name1.length-1;i++){
//    if (typeof(name1[i])==="number") {
//      name2_num.push(name1[i]);

//    }
//  }
//  console.log(name2_num)

// function calc (n1 ,n2) {

//   return n1+n2;

// }

//  let res=calc(30,20);
//  console.log(res);

//  let names =["samer","tawil"]
//  console.log(names.join(" "));

// let ca=0;
// function calc (...n1) {

//    for (i=0;i<n1.length;i++){
//      ca+=n1[i]
//    }
// return ca;
// }
// console.log(calc(10,20,30));
// console.log(ca)

// number challange

// let a=1_00;
// let b=2_00.5;
// let c=1e2;
// let d=2.4;

// console.log(Number(Math.min(a,b,c,d).toFixed()));

// console.log(Number(d.toFixed()));
// console.log(Math.round(d));
// console.log(Math.floor(d));
// console.log(parseInt(d));

// charater challange

// let a="Elzero Web School";

// console.log(a.charAt(2).toUpperCase()+a.slice(3,6));

// console.log("h".toUpperCase().repeat(8));

// console.log (a.slice(0,6).split(' '));

// // console.log(a.substr(0,6)+" "+a.substr(11,16));

// console.log(`${a.substr(0,6)} ${a.substr(11,16)}`);

// console.log(a[0].toLowerCase()+a.substr(1,15).toUpperCase()+a[a.length-1].toLowerCase());

// array challange

//  let zero=0;
//  let counter=3;
//  let my =["Ahmed","mazera","Elham","Osama","gamal","Amer"];

//   my.pop(); my.pop();
//  console.log(my.reverse()) ;

//  my.shift(); my.pop();
//  console.log(my)

// if challange

// let a = "Elzero Web School";
// let newa = a.length * 2;

// if (newa.toString() == "34") {
//   console.log(`yes`);
// } else console.log(`no`);

// let w_var1 = a.indexOf("W");

// let b = a[w_var1].toUpperCase();

// if (b === "W") {
//   console.log(`ok   1`);
// } else console.log(`noppp`);

// if (typeof 5 !== "string") {
//   console.log(`ok`);
// } else console.log(`no`);

// if (typeof 5 === "number") {
//   console.log(`ok`);
// } else console.log(`no`);

// let avalabil = true;

// let newob = {
//   name: "samer",
//   age: 38,
//   "name 1": "tawil",
//   skills: ["Html", "Css", "js"],
//   avalabil: false,
//   address1: {
//     ksa: "riyad",
//     egypt: { add1: "cairo", add2: "giza" },
//   },

//   address2: {
//     add1: { city: "gaza", phone: "28" },
//     add2: { city: "cairo" },
//   },

//   sayhello: function () {
//     return `hello`;
//   },
//   chk_avability: function () {
//     if (newob.avalabil === true) {
//       return `free to work`;
//     } else {
//       `busy`;
//     }
//   },
// };

// console.log(newob.age);
// console.log(newob["name 1"]);
// console.log(newob.skills);
// console.log(newob.skills.join("|"));
// console.log(newob.skills[1]);
// console.log(newob.address1);
// console.log(newob.address1.egypt.add1);
// console.log(newob.address2.add1.city);

// console.log(newob.sayhello());

// console.log(newob.chk_avability());

// let newob1 = {}; // create new empty object and updating object
// // let newob1 = new Object(); // you can also create new empty object  by using "new" keyword
// console.log(newob1);
// newob1.name1 = "samer";
// newob1.age = 38;
// newob1["country"] = "gaza";
// newob1.sayhello = function () {
//   return `hello new object`;
// };
// console.log(newob1);
// console.log(newob1.sayhello());

// let obj1 = {
//   age: 20,
//   name1: "samer",
//   double1: function () {
//     return this.age * 2;
//   },
// };

// console.log(obj1.age);
// console.log(obj1.double1());
// let obj2 = Object.create(obj1);

// obj2.age = 30;
// console.log(obj2.age);
// console.log(obj2.double1());

// console.log(document.getElementById("p_id1").textContent);

// let p_id1_var = document.getElementById("p_id1");
// p_id1_var.textContent = "hello world";
// p_id1_var.style.color = "red";
// console.log(document.getElementById("p_id1"));

// let div_var_class = document.getElementsByClassName("main_div");

// div_var_class[0].innerHTML = `<p>hiii</p>`;
// console.log(div_var_class[0]);

// console.log(document.images[0]);
// document.images[0].src = "##";

// console.log(document.getElementById("p_id1").title);

// console.log(document.getElementById("p_id1").attributes);

// let myp = document.getElementsByTagName("p")[0];

// if (myp.hasAttribute("title") === true) {
//   if (myp.title === "") {
//     console.log(`hello 1`);
//   }
// } else {
//   console.log(`no`);
//   myp.title = "title1";
// }

// // myp.id = "22";
// // myp.id = "44";
// console.log(myp.title);

// let myelement = document.createElement("p");
// let myatt = document.createAttribute("my-att1");
// let mytext = document.createTextNode("prodcut one");
// let mycomment = document.createComment("this is comment");
// myelement.setAttributeNode(myatt);
// myelement.setAttribute("my-att1", "test");
// myelement.setAttribute("myatt-tt", "test2");
// myelement.appendChild(mytext);
// myelement.appendChild(mycomment);
// myelement.className = "cl1";
// myelement.title = "samer-example";
// document.body.appendChild(myelement);
// console.log(myelement);

// let mydiv = document.createElement("div");
// let myp = document.createElement("p");
// let myhead = document.createElement("h2");
// let mytexthead = document.createTextNode("headding");
// let mytext = document.createTextNode("hello div");
// let mytextp = document.createTextNode("hello p");
// let mymaincomment = document.createComment("div_comment");

// mydiv.className = "class1";
// mydiv.appendChild(mytext);
// myp.appendChild(mytextp);
// myhead.appendChild(mytexthead);
// mydiv.appendChild(myp);
// mydiv.appendChild(mymaincomment);
// myp.appendChild(myhead);
// myp.className = "class2";
// console.log(mydiv);
// document.body.appendChild(mydiv);

// for (let i = 0; i < 10; i++) {
//   let mydiv = document.createElement("div");
//   let myp = document.createElement("p");
//   let myhead = document.createElement("h2");

//   let mytexthead = document.createTextNode(`headding ${i + 1}`);
//   let mytext = document.createTextNode("hello div");
//   let mytextp = document.createTextNode("hello p");

//   let mymaincomment = document.createComment("div_comment");

//   mydiv.className = "class1";
//   myp.className = "class2";

//   mydiv.appendChild(mytext);
//   myp.appendChild(mytextp);
//   myhead.appendChild(mytexthead);

//   mydiv.appendChild(myp);
//   mydiv.appendChild(mymaincomment);
//   myp.appendChild(myhead);

//   console.log(mydiv);
//   document.body.appendChild(mydiv);
// }

// let name_var = document.getElementById("name_id");
// let age_var = document.getElementById("age_id");
// let btn_var = document.getElementById("btn_id1");

// btn_var.onclick = function (e) {
//   let name_valid = false;
//   let age_valid = false;

// if (name_var.value.length <= 10) {
//   name_valid = true;
// }

//   if (age_var.value != "") {
//     age_valid = true;
//   }

//   if (name_valid === false || age_valid === false) {
//     console.log(`not valied`);
//     e.preventDefault();
//   } else if (name_valid === true && age_valid === true) {
//     console.log(`hello`);
//   }
// };

// let f1 = document.getElementById("name_id");
// let f2 = document.getElementById("age_id");

// f1.onkeyup = function () {
//   console.log(f1.value.length);
// f1.style.color="red"
// // f2.focus();

// };

// let my = ["Ahmed", "mazera", "Elham", "Osama", "gamal", "Amer"];
// let my2 = "samer  tawil";
// console.log(my.splice(0, 3));
// console.log(my2.split());

// document.write("hhh");

// let a = 1_00;
// let b = 2_00.5;
// let c = 1e2;
// let d = 2.5;
// let f = [1, 2, 3, 4, 5];
// let aa = "30.5";

// console.log(Math.min(f).toFixed());
// console.log((50).toString());

let zero = 0;
let counter = 3;
let my = ["Ahmed", "mazera", "Elham", "Osama", "gamal", "Amer"];

my.pop();
my.pop();
console.log(my.reverse());

console.log(my.slice(1, 3));
console.log(my);
