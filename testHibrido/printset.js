
 

  // Delete 
  function deletar(codigo){
      
      // Delete id
      var deleteid = codigo;

      // AJAX Request
      $.ajax({
          url: 'excluir.php',
          type: 'POST',
          data: { codigo:deleteid },
      success: function(response){

          if(response == 1){
              // Remove row from HTML Table

             elemento = document.getElementById("linha-" + codigo);
              window.alert("Cliente deletado com Sucesso!");
              elemento.remove();

          }else{
              alert('Invalid ID.');
          }

      }
      });

  };





var slideIndex = 1;
showSlides(slideIndex);

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
  }

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
