function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("mySidenav").style.zIndex="1000"
  document.getElementById("main").style.marginLeft = "350px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

function popScr(){
  console.log("dev is clicked");
}

