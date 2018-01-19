/*function gee(){
var modal = document.getElementById('myModal');
var modala = document.getElementById('Modal');
var mod = document.getElementById('mod');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btna = document.getElementById("center");
var sub = document.getElementById("submit");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spana = document.getElementsByClassName("clos")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
spana.onclick = function() {
    modala.style.display = "none";
}
btna.onclick = function() {
    modala.style.display = "block";
}
sub.onclick = function() {
    mod.style.display = "block";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modala) {
        modal.style.display = "none";
        modala.style.display = "none";
    }
}
}

*/

function see(){
var nav = document.getElementById("see").nodeValue;
var bar = document.getElementsByName("ul").nodeValue;

if(window.onscroll){

    
if(window.pageYOffset>100){
        
        
        nav.style.background = "#8B4513";
        
    }
    else{
        
        nav.style.background = "rgba(0,0,0,0.5)";
    }
}


/*function myFunction() {
    document.getElementsByClassName("nav")[0].classList.toggle("responsive");
}

window.onclick = function(event) {
    if (event.target == bar) {
        bar.style.display = "none";
    }
}

}
*/
see();


    