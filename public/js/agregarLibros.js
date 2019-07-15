


var btn2 = document.querySelectorAll(".myBtn2");




for (btn2child of btn2){
  var modal= btn2child.nextElementSibling;

btn2child.onclick = function() {
  modal.style.display = "block";
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  var modalTitulo=modal.querySelector("h1");
  var close= modalTitulo.querySelector(".close2");
  close.onclick = function() {
    modal.style.display = "none";
  }
}}
