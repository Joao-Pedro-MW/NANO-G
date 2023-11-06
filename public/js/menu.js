
/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("menu_lateral").style.width = "350px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("menu_lateral").style.width = "0px";
}

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      if (document.getElementById("menu_lateral").style.width <= "170px"){
        openNav();
      }
      else{
        closeNav();
      } 
    }
});