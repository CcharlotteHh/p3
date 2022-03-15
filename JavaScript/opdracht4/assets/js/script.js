let cookie = document.getElementById("cookie"); // gets cookie from the DOM
let strartImg = document.querySelector("#strartImg");
let btnChange = document.getElementById("btnChange");

let score = 0; // declare score counter that starts at zero
let scoreDiv = document.createElement("div"); //creates scoreDiv element to display score
scoreDiv.innerHTML = score; //score inside scorecounter

let playerName = prompt("What's your name?"); // creates player name from promt user fills in on loading the page
document.getElementById("name").innerHTML = playerName;
console.log(playerName);
//scoreDiv.innerHTML = score;
document.getElementById("counterContainer").appendChild(scoreDiv);

let newCookieContainer = document.querySelector(".newCookieContainer"); //container for newCookie when cookie is clicked 10 times

btnChange.addEventListener("click", changeImg);

function changeImg() {
  //  function to change avatar image when clicking on btnChange,changes the startImg source based on current img source
  if (strartImg.src.match("assets/img/cookie.png")) {
    strartImg.src = "assets/img/fries.png";
  } else if (strartImg.src.match("assets/img/fries.png")) {
    strartImg.src = "assets/img/cupcake.png";
  } else if (strartImg.src.match("assets/img/cupcake.png")) {
    strartImg.src = "assets/img/donut.png";
  } else {
    strartImg.src = "assets/img/fries.png";
  }
}

cookie.addEventListener("click", function () {
  score++; // ups score by one when cookie is clicked
  scoreDiv.innerHTML = score; //score inside scorecounter
  console.log(score);
  addCookie(); // addCookie function is called
});

function addCookie() {
  //this function will add a cookie to the cookie container the goal is for the player to get a new cookie in the cookie container every 10 clicks
  //newCookieContainer.append(newCookie);
  if (score % 5 == 0) {
    let newCookie = document.createElement("img"); // creates newCookie img element
    newCookie.src = "assets/img/smallcookie.png"; // gives source to newCookie element
    newCookie.style.width = "50px"; // width of newCookie
    newCookie.style.height = "50px";
    newCookieContainer.appendChild(newCookie);
    console.log("score = 10");
  }
  
}
