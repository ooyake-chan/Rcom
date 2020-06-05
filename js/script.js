$(function(){
  $("#menu-show").click(function(){
     if($("nav").hasClass("show")){
       $("nav").removeClass("show")
       $(".sp-menu").slideUp();
       }else{
       $("nav").addClass("show")
       $(".sp-menu").slideDown();
     }});

     $('.slider').slick({
      centerMode: true,
      centerPadding: '100px',
      dots:false,
      focusOnSelect:true,
      autoplay:true,
      arrows:false,
      
  });

 });