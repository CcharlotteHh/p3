const cookie = document.getElementById("cookie"); // get cookie from the DOM
let score = 0; // declare score counter that starts at zero
let scoreDiv = document.createElement("div");
let playerName = prompt("What's your name?");
document.getElementById("name").innerHTML = (playerName);
console.log(playerName);
scoreDiv.innerHTML = score;
document.getElementById("counterContainer").appendChild(scoreDiv);

//function to create pictures
function makeAvatar(){

  var fries = new Image();{
    fries.src = "assets/img/fries.png"
    console.log(fries)
  }

  
}


const avatars = ['']

const btnChange = document.getElementById("changeavatar");

cookie.addEventListener("click", function () {
  scoreDiv.innerHTML = score;
  makeAvatar()
  score += 1;
 console.log(score);
});



btnChange.addEventListener("click", function () {

});

