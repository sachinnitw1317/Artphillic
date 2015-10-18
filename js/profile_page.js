$(document).ready(function() {
	
  $(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
     $(this).removeClass("btn-default").addClass("btn-primary");

    $('#b_photo').click(function(){
 $('#photoo').css('visibility','visible');
  $('#posto').css('visibility','hidden');
   $('#videoo').css('visibility','hidden');
 }); 


   $('#b_post').click(function(){
 $('#posto').css('visibility','visible');
  $('#photoo').css('visibility','hidden');
   $('#videoo').css('visibility','hidden');
});


   $('#b_video').click(function(){
 $('#videoo').css('visibility','visible');
  $('#posto').css('visibility','hidden');
   $('#photoo').css('visibility','hidden');
});

 });

 
  