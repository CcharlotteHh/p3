const cookie = document.getElementById("cookie"); // get cookie from the DOM
let score = 0; // declare score counter that starts at zero 
const btnchange = document.getElementById("changeavatar");

cookie.addEventListener("click", myFunction); // add event listner to cookie to change the image
function myFunction() {
  console.log("cookie.addevenlistner works")
}

function cookieClick() { // function declared in html that makes score go up everytime cookie is clicked
  score += 1; 
  console.log(score);
  var counter = (document.getElementById("counter").innerText = score);
}

btnchange.addEventListener("click", function(){
    alert("one day i will make the cookie change")
  });
