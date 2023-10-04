
/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0px";
}

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      if (document.getElementById("mySidenav").style.width <= "170px"){
        openNav();
      }
      else{
        closeNav();
      } 
    }
});