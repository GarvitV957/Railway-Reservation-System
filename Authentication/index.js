/* const texts=["E","Ea","Eat","Eat","Ea","E","","C","Co","Cod","Code","Code","Cod","Co","C","","S","Sl","Sle","Slee","Sleep","Sleep","Slee","Sle","Sl","S","","R","Re","Rep","Repe","Repea","Repeat","Repeat","Repea","Repe","Rep","Re","R",""]; */
var text="";
const fullText1 = "Find Trains Quickly...";
const fullText2 = "Book your tickets...";
// const fullText3 = "Upload Your Own Products...";
const texts=[""];
for (let i = 1; i <= fullText1.length; i++) {
    text=fullText1.slice(0,i);
    texts.push(text);
}
for (let i = 0; i < 10; i++) {
    texts.push(fullText1);
}
for (let i = fullText1.length; i >= 0; i=i-2) {
    text=fullText1.slice(0,i);
    texts.push(text);
}
for (let i = 1; i <= fullText2.length; i++) {
    text=fullText2.slice(0,i);
    texts.push(text);
}
for (let i = 0; i < 10; i++) {
    texts.push(fullText2);
}
for (let i = fullText2.length; i >= 0; i=i-2) {
    text=fullText2.slice(0,i);
    texts.push(text);
}
// for (let i = 1; i <= fullText3.length; i++) {
//     text=fullText3.slice(0,i);
//     texts.push(text);
// }
// for (let i = 0; i < 10; i++) {
//     texts.push(fullText3);
// }
// for (let i = fullText3.length; i >= 0; i=i-2) {
//     text=fullText3.slice(0,i);
//     texts.push(text);
// }



var i=0,j=0, j2=0;
const arrayLen = texts.length;
function Screen() {
   setInterval(function () {
       if (i==arrayLen) {
           i=0;
       }
       text = texts[i++];
        document.getElementById("text").innerHTML=text;
   },100)
   setInterval(function(){
       if(j==0){
           document.getElementById("span").style.opacity=0;
       }
       if(j==1){
           document.getElementById("span").style.opacity=0.25;
       }
       if(j==2){
           document.getElementById("span").style.opacity=0.5;
       }
       if(j==3){
           document.getElementById("span").style.opacity=1;
       }
       if(j==4){
           document.getElementById("span").style.opacity=0.5;
       }
       if(j==5){
           document.getElementById("span").style.opacity=0.25;
       }
       if (j==6) {
          document.getElementById("span").style.opacity=0;
       }
       j++;
       if (j==7) {
        j=0;
       }
   },100);
}

   setInterval(function(){
        document.getElementById("span-2").style.opacity=j2/150;
       j2++;
       if (j2==150) {
        j2=0;
       }
   },10);
Screen();

// FOR LOADER

function loaded(){
    document.getElementById("loading").style.display = "none";
 }



// registration button alert

var passText="";
function check() {
    passText = document.getElementById("password").value;
    if (passText.length>=8) {
        document.querySelector(".eight").classList.remove("red");
        document.querySelector(".eight").classList.add("green");
    }
    else{
        document.querySelector(".eight").classList.remove("green");
        document.querySelector(".eight").classList.add("red");
    }
    var lowerCaseLetters = /[a-z]/g;
    if (passText.match(lowerCaseLetters)) {
        document.querySelector(".lowercase").classList.remove("red");
        document.querySelector(".lowercase").classList.add("green");
    }
    else{
        document.querySelector(".lowercase").classList.remove("green");
        document.querySelector(".lowercase").classList.add("red");
    }
    var UpperCaseLetters = /[A-Z]/g;
    if (passText.match(UpperCaseLetters)) {
        document.querySelector(".uppercase").classList.remove("red");
        document.querySelector(".uppercase").classList.add("green");
    }
    else{
        document.querySelector(".uppercase").classList.remove("green");
        document.querySelector(".uppercase").classList.add("red");
    }
    var numericalValue = /[0-9]/g;
    if (passText.match(numericalValue)) {
        document.querySelector(".number").classList.remove("red");
        document.querySelector(".number").classList.add("green");
    }
    else{
        document.querySelector(".number").classList.remove("green");
        document.querySelector(".number").classList.add("red");
    }
}