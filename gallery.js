$(document).ready(function(){
    var slides = $(".image");
    var slideIndex = 0;
    var slide = "";
    
    slides.hide();
    slides.first().show();

    slide = slides[slideIndex];
    
    $(".next").click(function(){
        $(slide).hide();
        slideIndex++;
        if (slideIndex > 2) {
            slideIndex = 0;
        }

        slide = slides[slideIndex]
        $(slide).show();

    });
    
    $(".previous").click(function(){
        $(slide).hide();
        slideIndex--;
       if (slideIndex < 0) {
            slideIndex = 2;
      }

      slide = slides[slideIndex];
      $(slide).show();
      
    });
});